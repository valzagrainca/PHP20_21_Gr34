<?php

session_start(); //without starting the session we can't delete the session variables
session_unset();
session_destroy();
header("Location: homepage.php");
exit();