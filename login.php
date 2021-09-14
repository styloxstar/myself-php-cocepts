<?php
ini_set('max_execution_time',0);
ini_set('display_errors',1);
ini_set('display_startup_errors',1);






if (isset($_POST['normal_login'])) {
    // $result="normal login";
    require_once('connect.php');
    $user = mysqli_escape_string($con, $_POST['username']);
    $pass = mysqli_escape_string($con, $_POST['password']);
    $all = "SELECT* FROM `users`";
    $check = mysqli_query($con, $all);

    while ($data = mysqli_fetch_assoc($check)) {
        // print_r($data);
        if ($data['email'] == $user) {
            $getPassword = "select * from users where `email`='$user'";
            $process = mysqli_query($con, $getPassword);
            while ($pData = mysqli_fetch_assoc($process)) {
                // print_r($pData);
                // echo $pData['password'];
                if (password_verify($pass, $pData['password'])) {
                    // echo "match found";

                    $e_user = base64_encode(urlencode($user));

                    $mainResult = "<div class='alert alert-success my-2 text-center'>Login Successful</div>";
                    // session_set_cookie_params(0);
                    // session_start();
                    // $_SESSION['mUser'] = $user;
                    // header("Refresh:2;url=dashboard.php?username=" . $e_user . "");
                    break;
                } else {
                    // echo "match not found"; 
                    $mainResult = "<div class='alert alert-danger my-2 text-center'>password is wrong</div>";
                }
            }
            $result = $mainResult;
            break;
        } else {
            $result = "<div class='alert alert-danger my-2 text-center'>User Not Found, Kindly register first</div>";
        }
    }
}





?>









<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comeback Deepak</title>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>


    <div class="container" style="margin-top:7.25em;">

        <div class="row">
            <div class="col-md-8 m-auto">
                <div class="card shadow">
                    <div class="card-header text-center">User Registration</div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-6 m-auto">
                                <?php
                                if (isset($result)) {
                                    // echo '<div class="alert alert-success my-2 text-center">' . $result . '</div>';
                                    echo $result;
                                }

                                if (isset($error)) {
                                    // echo '<div class="alert alert-danger my-2 text-center">' . $error . '</div>';
                                    echo $result;
                                }
                                ?>
                            </div>
                        </div>



                        <form action="" method="post">

                            <div class="row py-2">
                                <div class="col-md-10 m-auto">
                                    <input type="text" class="form-control" name="username" id="username" placeholder="Enter username!!">
                                </div>
                            </div>


                            <div class="row py-2">
                                <div class="col-md-10 m-auto">
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter password!!">
                                </div>
                            </div>

                            <div class="row py-4">
                                <div class="col-md-6 m-auto">
                                    <input type="submit" name="normal_login" class="btn btn-primary shadow" value="Login by Normal">

                                    <input type="submit" name="pdo_login" class="btn btn-success shadow" value="Login by PDO">
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- 
                    <div class="card-footer">
                        <a class="btn btn-block btn-dark" href="login.php?status=">Encoding Check</a>
                    </div> -->
                </div>

            </div>
        </div>

    </div>




</body>

</html>