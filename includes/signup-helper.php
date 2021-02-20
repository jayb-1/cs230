<?php
#grabbing the info when submit button is clicked
if(isset($_POST['signup-submit'])){
    require 'dbhandler.php';

    $username = $_POST['uname'];
    $email = $_POST['email'];
    $passw = $_POST['pwd'];
    $passw_rep = $_POST['con-pwd'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];

    #making sure the passwords match
    if($passw !== $passw_rep) {
        #this wgill kick person back to signup page
        header("Location: ../signup.php?error=diffPasswords");
        exit();
    }

    #This check will indicate if person perform sql injection 
    #"using sql code in username/password to get databack to be true" allows you to log on as admin root user"
    else {
        $sql = "SELECT uname FROM users WHERE uname=?"; # checking for duplicates
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../signup.php?error=SQLInjection");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $check = mysqli_stmt_num_rows($stmt);

            if($check > 0) {
                header("Location: ../signup.php?error=Username Taken");
                exit();
            }
            else {
                #this is how you send data to a database by code
                $sql = "INSERT INTO users (lname, fname, email, uname, password) VALUES (?, ?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);

                #checking of mysql injuction
                if(!mysqli_stmt_prepare($stmt, $sql)){
                 header("Location: ../signup.php?error=SQLInjection");
                    exit();
                 }
                 #assuming they are not sql injections
                 else {
                     #to store, using B-crpyt
                     $hashed = password_hash($passw, PASSWORD_BCRYPT);
                     mysqli_stmt_bind_param($stmt, "sssss",$lname, $fname,$email, $username, $hashed);
                     mysqli_stmt_execute($stmt);
                     mysqli_stmt_store_result($stmt);

                    #stores uname, fname, profilepic
                     $sqlImg = "INSERT INTO profiles (uname, fname) VALUES ('$username','$fname')";
                     mysqli_query($conn, $sqlImg);

                     header("Location: ../signup.php?signup=sucess");
                     exit();
                 }
            }
        }
        mysql_stmt_close($stmt);
        mysqli_close($conn);
    }
} else {
    header("Location: ../signup.php");
     exit();
}