<?php 


if(isset($_COOKIE['tester'])){
    echo "<h3 style='text-align:center'>Welcome, ".$_COOKIE['tester']."</h3>";
}else{
    echo "<h3 style='text-align:center'>Welcome, Guest</h3>";
}


?>