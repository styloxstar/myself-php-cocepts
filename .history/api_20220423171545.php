<?php 

$url= "https://jsonplaceholder.typicode.com/todos/";
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);  

// when return transfer set to true, then it will return data as object while decoding json, and when set to false it will return the data as arrays chunks with json string while decoding, so we'll not able to fetch the data properly

$result=curl_exec($ch);
curl_close($ch);

// print_r($result);

$arrayResult = json_decode($result);
echo "<pre>";
print_r($arrayResult)


?>











<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Title</title>
</head>
<body>


<div class="container my-5 shadow">
    <table class="table table-small table-striped table-bordered">
        <tr>
            <th>UserId</th>
            <th>ID</th>
            <th>Title</th>
            <th>Completed</th>
        </tr>

        <?php 
            foreach($arrayResult as $list){  // alwyas use foreach function since we don't have to usemysqli function or to be dependent on db 
                echo "<tr>
                    <td>".$list->userId. "</td>  // since data is returned in onjectformat, we have to use arary functin istead of []
                    <td>" . $list->id . "</td>
                    <td>" . $list->title . "</td>
                    <td>" . $list->completed . "</td>
                </tr>";
            
            
            }
        ?>

    </table>



</div>





<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>