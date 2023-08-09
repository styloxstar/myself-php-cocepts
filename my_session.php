<?php 


session_start();



if(isset($_SESSION['username'])){
    echo "<h3 style='text-align:center'>Welcomec".$_SESSION['username']."</h3>";
    echo "<br><br>";

    echo "<a href='my_logout.php' style='padding:5px;border:1px solid gray;background-color:teal;color:white;'>Logout</a>";


}else{
    echo "<h3 style='text-align:center'>Welcome, guest</h3>";
}








?>