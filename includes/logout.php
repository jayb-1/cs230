<?php

session_start();
session_unset();
session_destroy();
//after logging someone out, this redirects them
header("Location: ../index.php");
exit();