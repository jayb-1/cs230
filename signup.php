<?php
require "includes/header.php"
?>
<body>
<main>
<div class="padding"></div>
    <link rel="stylesheet" href="css/signup.css">
    <div style="border:15px solid orange;background-color:black;color:white;font-size:50px;text-align:center;" class="clearfix" >
        <img class="img2" src="../images/join.jpg" alt="" width="1920" height="441">
        
       JOIN US
    </div>
   
    
        <div class="h-100 container center-me">
            <div class="mx-auto">
                <div class="form-signup">

                    <form action="includes/signup-helper.php" method="post">
                    
                    <img classg="mb-4" src="../images/icon2.png";
                            alt="" width="72" height="72">
                        <h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>
                        <p class="hint-text">Create your account!</p>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">

                                    <input type="text" class="form-control" name="fname"placeholder="First Name" required autofocus>
                                </div>
                                <div class="col">

                                    <input type="text" class="form-control"  name="lname"placeholder="Last Name" required autofocus>
                                </div>
                            </div>
                        </div>
                        <input type="text" class="form-control"  name="uname"placeholder="User Name" required autofocus>


                        <label for="inputEmail" class="sr-only">Email address</label>
                        <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required
                            autofocus>

                        <label for="inputPassword" class="sr-only">Password</label>
                        <input type="password" id="inputPassword" class="form-control"  name="pwd"placeholder="Password" required>

                        <label for="inputPassword" class="sr-only"> Confirm Password</label>
                        <input type="password" id="inputPassword" class="form-control" name="con-pwd" placeholder="Confirm Password"
                            required>

                        <button class="btn btn-lg btn-outline-primary btn-block"  name="signup-submit"type="submit">Join Now</button>
                        <p class="mt-5 mb-3 text-muted">&copy; 2020-2021</p>

                    </form>

                </div>



            </div>
        </div>

    

</main>
</body>