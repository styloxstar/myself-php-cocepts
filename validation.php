<?php 
if(isset($_POST['aName'])){
    $name = $_POST['aName'];
    if(!preg_match("/^[a-zA-Z ]{3,}$/",$name)){
        // $result="only letters and spaces are allowed with minimum 3 characters";
        echo 'failed';
    }else{
        // $result="congarts,you can proceed now";
        echo 'success';
    }

    // echo $result;

    
}

// $phone = $_POST['phone'];
// if (!preg_match("/^[6-9][0-9]{9}$/", $phone)) {
//     // $emailErr = "Invalid email format";
//     echo false;
// } else {
//     echo true;
// }


if (isset($_POST['aEmail'])) {
    $email = $_POST['aEmail'];
    if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        // $result="only letters and spaces are allowed with minimum 3 characters";
        echo 'failed';
    } else {
        // $result="congarts,you can proceed now";
        echo 'success';
    }

    // echo $result;


}

if (isset($_POST['aMobile'])) {
    $mobile = $_POST['aMobile'];
    if (!preg_match("/^[6-9][0-9]{9}$/", $mobile)) {
        // $result="only letters and spaces are allowed with minimum 3 characters";
        echo 'failed';
    } else {
        // $result="congarts,you can proceed now";
        echo 'success';
    }

    // echo $result;


}



?>