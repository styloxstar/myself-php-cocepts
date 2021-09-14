<?php



if (isset($_POST['save'])) {

    require_once('pdoConnect.php');
    require_once('pdoFunctions.php');

    $name =  $_POST['name'];
    $email =  $_POST['email'];
    $password =  $_POST['password'];
    $hash = password_hash($password, PASSWORD_BCRYPT, ['const' => 10]);
    $mobile =  $_POST['mobile'];
    $address =  $_POST['address'];
    $gender =  $_POST['gender'];

    $mPdo = new operation();
    $mPdo->insertData($name,$email,$hash,$mobile,$address,$gender);

    

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
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Title</title>
</head>

<body>


    <div class="container">


        <div class="row" style="margin-top:100px;">
            <div class="col-md-6 m-auto">
                <form action="" method="post" autocomplete="off">
                    <div class="card shadow">
                        <div class="card-header">Fill This form</div>
                        <div class="card-body">

                            <div class="row my-2">
                                <div class="col-md-8 m-auto">
                                    <?php
                                    if (isset($result)) {
                                        echo $result;
                                    }
                                    ?>
                                </div>
                            </div>


                            <div class="row py-2">
                                <div class="col-md-10 m-auto">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Please, enter name" value="<?php if (isset($name)) {
                                                                                                                                                echo $name;
                                                                                                                                            } ?>">
                                </div>
                            </div>


                            <div class="row py-2">
                                <div class="col-md-10 m-auto">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Please, enter email" value="<?php if (isset($email)) {
                                                                                                                                                    echo $email;
                                                                                                                                                } ?>">
                                </div>
                            </div>



                            <div class="row py-2">
                                <div class="col-md-10 m-auto">
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Please, enter password" value="<?php if (isset($password)) {
                                                                                                                                                                echo $password;
                                                                                                                                                            } ?>">
                                </div>
                            </div>



                            <div class="row py-2">
                                <div class="col-md-10 m-auto">
                                    <input type="number" class="form-control" name="mobile" id="mobile" placeholder="Please, enter mobile" value="<?php if (isset($mobile)) {
                                                                                                                                                        echo $mobile;
                                                                                                                                                    } ?>">
                                </div>
                            </div>



                            <div class="row py-2">
                                <div class="col-md-10 m-auto">
                                    <textarea name="address" class="form-control" id="address" cols="30" rows="5" placeholder="please, enter addresss"><?php if (isset($address)) {
                                                                                                                                                            echo $address;
                                                                                                                                                        } ?></textarea>
                                </div>
                            </div>



                            <div class="row py-2">
                                <div class="col-md-10 m-auto">

                                    Gender:

                                    <input type="radio" name="gender" id="gender" class="mx-2 mt-2" value="male">Male
                                    <input type="radio" name="gender" id="gender" class="mx-2 mt-2" value="female">Female


                                </div>
                            </div>


                            <div class="row py-4">
                                <div class="col-md-4 m-auto">
                                    <input type="submit" name="save" class="btn btn-block btn-primary" value="Save Data">
                                </div>
                            </div>

                        </div>
                    </div>

                </form>
            </div>
        </div>







    </div>


    <div class="container shadow-lg my-5">

        <div class="row text-center my-3">
            <h3 class="text-center m-auto border-bottom border-primary"> All Saved Data</h3>
        </div>


        <div class="row py-2">
                <?php
                require_once('pdoConnect.php');
                require_once('pdoFunctions.php');

                    $getData = new operation();
                    $getData->display();

                    while($myData = $query->fetch()){

                        echo '<div class="col-md-4 m-auto">
                                <div class="card my-2 shadow">
                                    <div class="card-header text-center">'.$myData['name'].'</div>
                                    <div class="card-body text-center">
                                        <p class="lead">
                                            Email: '.$myData['email']. '
                                        </p>

                                        <p class="lead">
                                            Mobile: ' . $myData['mobile'] . '
                                        </p>

                                        <p class="lead">
                                            Address: ' . $myData['address'] . '
                                        </p>
                                        
                                        <p class="lead">
                                            Gender: ' . $myData['gender'] . '
                                        </p>
                                        
                                    
                                    </div>
                                </div>
                        
                        </div>';
                    
                    }
                ?>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>