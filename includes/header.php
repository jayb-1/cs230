<?php
session_start();
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Amper-Sam</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="../css/signup.css">

</head>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <!--newly added-->
    <!--<div class="d-md-flex d-block flex-row mx-md-auto mx-0">-->
        <a class="navbar-brand" href="index">Amp+Reviews</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <!--NEW CODE SNIPPET FOR LAB INSERT HERE-->
                    <?php if (isset($_SESSION['uid'])) {
                echo '<li class="nav-item">
                <a class="nav-link" href="includes/logout.php">Logout</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="gallery.php">Gallery</a>
                </li>
                <li class ="nav-item">
                <a class="nav-link" href="profile.php">Profile</a>
                </li>';
            }
            else {
                echo    '<li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                     </li>';

            }
             ?>
                    <!--MARKER-->

                        <li class="nav-item active">
                            <a class="nav-link" href="../index.php">Home<span class="sr-only">(current)</span></a>
                        </li>

                      <!--  <li class="nav-item active">
                            <a class="nav-link" href="../login.php">Login<span class="sr-only">(current)</span></a>
                        </li> -->
                        <!-- THIS WAS NOT INCLUDED IN VIDEO BUT IS HERE -->

                        <!--
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Reviews
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Replace Me</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Replace Me 2</a>
                            </div>
                        </li>  -->

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
</header>