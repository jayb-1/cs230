<?php

if(isset($_POST['login-submit'])){
    require 'dbhandler.php';
#POST is super global variable -- accessible anywhere at any time
    $uname = $_POST['uname-email'];
    $passw = $_POST['pwd'];

    #checking of fields are empty -- else throws them back to fix statement
    if(empty($uname)||empty($passw)) {
        header("Location: ../login.php?error=EmptyField");
        exit();
    }

    $sql = "SELECT * FROM users WHERE uname=? OR email=?";
    $stmt = mysqli_stmt_init($conn);

    #check for sql injection
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: ../login.php?error=SQLInjection");
           exit();
        }else {
            mysqli_stmt_bind_param($stmt, "ss", $uname, $uname);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $data = mysqli_fetch_assoc($result);

                #checking if user exits
            if (empty($data)){
                header("Location:../login.php?error=UserDNE");
                exit();
            }
#when user does  exist
else{
$pass_check = password_verify($passw, $data['password']);
#when everthing checks out, this  begins a session -- destroyed when browsers close
if($pass_check == true) {
    session_start();
    $_SESSION['uid'] = $data['uid'];
    $_SESSION['fname'] = $data['fname'];
    $_SESSION['uname'] = $data['uname'];

    echo "<h1>Success!</h1><p>.$uname.</p>";
}else {
    header("Location: ../login.php?error=WrongPass");
    exit();
}
}
        }

}else {
    header("Location: ../login.php");
     exit();
}