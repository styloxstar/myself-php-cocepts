<?php


if (isset($_POST['apiSave'])) {
    $name = $_POST['aName'];
    $email = $_POST['aEmail'];
    $mobile = $_POST['aMobile'];


    $arr['name']=$name;
    $arr['email'] = $email;
    $arr['mobile'] = $mobile;


    $url="http://localhost:5555/myself/crudApi/insert.php";

    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$arr);

    $result=curl_exec($ch);
    curl_close($ch);

    $result=json_decode($result,true); // to convert json decode as associative array instead of object, we need to pass second argument as true, default json_decode() returns data as object


}





?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="../style.css">
    <title>API CRUD</title>
</head>

<body>

    <div class="container my-5 ">
        <div class="card col-md-8 m-auto shadow">
            <div class="card-header text-center">CRUD OPERATION WITH API</div>
            <div class="card-body">
                <form action="" method="post">

                    <div class="row py-2">
                        <div class="col-md-6 m-auto">
                            <?php 
                                if(isset($result)){
                                
                                    echo "<div class='alert alert-success text-center'>".$result['data']."</div>";
                                
                                }
                            ?>
                        
                        </div>
                    </div>



                    <div class="row py-2">
                        <div class="col-md-10 m-auto">
                            <input type="text" name="aName" id="aName" class="form-control" placeholder="Enter Name!!">

                        </div>


                    </div>

                    <div class="row py-2">
                        <div class="col-md-10 m-auto">
                            <input type="email" name="aEmail" id="aEmail" class="form-control" placeholder="Enter Email!!">
                        </div>


                    </div>

                    <div class="row py-2">
                        <div class="col-md-10 m-auto">
                            <input type="number" name="aMobile" id="aMobile" class="form-control" placeholder="Enter Mobile!!">
                        </div>


                    </div>

                    <div class="row py-3">
                        <div class="col-md-4 m-auto">
                            <input type="submit" class="btn btn-block btn-primary" name="apiSave" id="apiSave" value="API Save">
                        </div>

                    </div>


                </form>



            </div>


        </div>




    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>