<?php 

class operation{

function insertData($name,$email,$password,$mobile,$address,$gender){
    global $pdo,$result;
    $query = $pdo->prepare("INSERT INTO users(name,email,password,mobile,address,gender) values (?,?,?,?,?,?)");
    $query->bindValue(1,$name);
    $query->bindValue(2, $email);
    $query->bindValue(3, $password);
    $query->bindValue(4, $mobile);
    $query->bindValue(5, $address);
    $query->bindValue(6, $gender);
    $query->execute();
    if($query){
        $result = "<div class='alert alert-success text-center'>Data saved via PDO 😊👌</div>";
    }else{
        $result = "<div class='alert alert-danger text-center'>Data failed to save via PDO 😢</div>";
    }



}



function update(){}


function delete(){


}


function display(){

global $pdo,$query,$showData;

$query=$pdo->prepare("SELECT * FROM users");
$query->execute();
$query->setFetchMode(PDO::FETCH_ASSOC);


// print_r($query);

}





}





?>