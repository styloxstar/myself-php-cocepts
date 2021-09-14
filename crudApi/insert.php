<?php

require('../connect.php');


if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['mobile'])) {


    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    $query= "INSERT INTO api(name,email,mobile) values ('$name','$email','$mobile')";
    $run = mysqli_query($con,$query);
    $status= "true";
    $data="Data Inserted";
    $code='1';
}else{
    $status = "false";
    $data = "Data not accessible";
    $code = '2';

}

echo json_encode(['status'=>$status,'data'=>$data,'code'=>$code]);

?>
