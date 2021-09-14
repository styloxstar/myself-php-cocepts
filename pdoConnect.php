<?php 



try{
$pdo = new PDO('mysql:host=localhost;dbname=village','root','');
    // echo "connected succesfully";
}catch(PDOException $e){
    exit('database error');
}
?>