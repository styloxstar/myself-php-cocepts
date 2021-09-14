<?php

// use keyword used to inlude namespace

// use User\Profile;

// or import like below by making an alias

use User\Profile\UserData as uData;




include 'file1.php';


// $user = new \User\Profile\UserData(1, 'devil');

$user = new uData(2, 'deepak')







?>