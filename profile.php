<?php
error_reporting(E_ALL);


if (isset($_POST['saveProfile'])) {
    require_once('connect.php');

    $username = mysqli_escape_string($con, $_POST['username']);
    $description = mysqli_escape_string($con, $_POST['description']);
    // $profilePhoto = mysqli_escape_string($con, $_POST['profilePhoto']);

    $originalPhoto = $_FILES['profilePhoto']['name'];
    $tmpName = $_FILES['profilePhoto']['tmp_name'];

    $finalName = time() . '-' . $originalPhoto;

    $fileSize = $_FILES['profilePhoto']['size'];
    $fileExtention = $_FILES['profilePhoto']['type'];
    $exploding = explode('.', $originalPhoto);
    $file_ext = strtolower(end($exploding));

    // echo $originalPhoto.' and '.$file_ext;

    $allowedExtension = ['jpg','jpeg','png'];
    $allowedFileSie = 200000; //repsents 2MB

    if(!in_array($file_ext,$allowedExtension)){
        $error = 'only allowed jpeg, jpeg, and png files';
    }else if($fileSize>$allowedExtension){
        $error = 'you can upload upto max 2MB';
    }else{
    move_uploaded_file($tmpName, 'profiles/' . $finalName);

    $sql = "INSERT INTO profiles(username,description,profilePhoto) values('$username','$description','$finalName')";
    $process = mysqli_query($con,$sql);

    if($process){
        $result="<div class='alert alert-success text-center'>Profile Saved successfully</div>";
    }else{
            $result = "<div class='alert alert-danger text-center'>Profile Failed to Save</div>";
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
                    <div class="card-header text-center">Create Profile</div>
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
                                    echo $error;
                                }
                                ?>
                            </div>
                        </div>



                        <form action="" method="post" enctype="multipart/form-data">

                            <div class="row py-2">
                                <div class="col-md-10 m-auto">
                                    <input type="text" class="form-control" name="username" id="username" placeholder="Enter username!!">
                                </div>
                            </div>


                            <div class="row py-2">
                                <div class="col-md-10 m-auto">
                                    <textarea name="description" class="form-control" id="description" cols="30" rows="5" placeholder="Enter profile description"></textarea>
                                </div>
                            </div>

                            <div class="row py-2">
                                <div class="col-md-10 m-auto">
                                    <input type="file" name="profilePhoto" id="profilePhoto"  accept="image/*" capture="camera">
                                </div>
                            </div>

                            <div class="row py-4">
                                <div class="col-md-4 m-auto">
                                    <input type="submit" name="saveProfile" class="btn btn-primary shadow" value="Save Profile">

                                    <!-- <input type="submit" name="pdo_login" class="btn btn-success shadow" value="Login by PDO"> -->
                                </div>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>

    </div>



    <div class="container my-5">

        <div class="card">
            <div class="card-header text-center">
                Profile Data
            </div>
            <div class="card-body">
                <table class="table table-small table-striped table-bordered shadow">
                    <tr>
                        <th>Id</th>
                        <th>Username</th>
                        <th>Description</th>
                        <th>Profile Pic</th>
                    </tr>

                    <?php 
                        require_once('connect.php');
                        
                        $getProfile = "select * from profiles";
                        $query = mysqli_query($con,$getProfile);
                        $x=1;
                        while($showProfile = mysqli_fetch_assoc($query)){

                            echo "
                                <tr>
                                    <td>".$x."</td>
                                    <td>".$showProfile['username']. "</td>
                                    <td>" . $showProfile['description'] . "</td>
                                    <td>
                                        <img src='profiles/".$showProfile['profilePhoto']."' style='height:50px;width:50px;' alt='profilePic' />
                                    </td>
                                    
                                </tr>
                            
                            ";

                            $x++;
                        
                        
                        }

                    ?>
                </table>
            
            </div>
        </div>
    
    
    </div>




</body>

</html>