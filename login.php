<?php
require 'includes/header.php';
?>

<!-- up to this point will be HTML -->

<body>


    <main>
        <div id="bodywrap" class=>



            <link rel="stylesheet" href="css/login.css">

            <!--nice background cover -- parent class excluding main-->


            <!--bootstrap 4 class defined/specified in bootstrap(website) carousel - different options to chose from/ cpy &
         paste the code-->
            <div class="container">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="images/c1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block mx-auto" src="images/c2.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="images/c3.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <!--takes up 40% of parent height -- applies centering qualities -->
            <div class="h-70 center-me">

                <!--margin along the y-axis -->
                <div class="my-auto">
                    <form class="form-signin" action="includes/login-helper.php" method="post">
                        <h2> Hello </h2>
                        <img classg="mb-4" src="images/icon2.png" alt="" width="72" height="72">

                        <p class="hint-text">Please Login:</p>
                        <div class="form-group">
                            <input type="text" class="form-control" name="uname-email" placeholder="Username/ Email"
                                required="required">
                        </div>


                        <div class="form-group">
                            <label for="inputPassword" class="sr-only">Password</label>
                            <input type="password" id="inputPassword" class="form-control" name="pwd"
                                placeholder="Password" required="required">
                        </div>

                        <div class="form-group">
                            <button class="btn btn-lg btn-outline-primary btn-block" name="login-submit"
                                type="submit">Login</button>

                
                                
                                <a class="nav-link" href="signup.php">New To The Site? Sign Up Here</a>

                            <p class="mt-5 mb-3 text-muted">&copy; 2020-2021</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

</body>