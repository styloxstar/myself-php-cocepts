<?php

session_start();
unset($_SESSION['username']);
header('location:myPractice2.php');

?>