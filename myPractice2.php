<?php
ob_start();
        session_start();
// ini_set('max_execution_time', 0);
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting('E_All');


echo "<br><hr><h3 style='text-align:center'>Reference</h3>";
$a = 10;
$b = 'a';
$c = $$b;
echo $c;
echo "<br><hr><h3 style='text-align:center'>Swapping using third variale</h3>";

$f1 = 10;
$s1 = 21;
echo "<br>before swapping the values of first number is: " . $f1 . ' and the values of second anumber is: ' . $s1;
$t1 = $f1;
$f1 = $s1;
$s1 = $t1;
echo "<br>after swapping the values of first number is: " . $f1 . ' and the values of second anumber is: ' . $s1;

echo "<br><hr><h3 style='text-align:center'>Swapping without using third variale</h3>";

$f2 = 15;
$s2 = 26;

echo "<br>before swapping the values of first number is: " . $f2 . ' and the values of second anumber is: ' . $s2;
$f2 = $f2 + $s2;
$s2 = $f2 - $s2;
$f2 = $f2 - $s2;
echo "<br>After swapping the values of first number is: " . $f2 . ' and the values of second anumber is: ' . $s2;

echo "<br><hr><h3 style='text-align:center'>Some Programs to practice</h3>";


if (isset($_POST['factorial'])) {


    $num = $_POST['mNumber'];
    factorial($num);
}

function factorial($num)
{
    global $result;
    $fact = 1;
    while ($num >= 1) {
        $fact = $fact * $num;
        $num--;
    }

    $result = "Factorial of your choosen number is: " . $fact;
}


if (isset($_POST['reverse'])) {
    $num = $_POST['mNumber'];
    reverse($num);
}

function reverse($num)
{
    global $result;
    $rev = 0;

    while ($num >= 1) {
        $rev = $rev * 10 + $num % 10;
        $num = $num / 10;
    }

    $result = "reverse of your choosen number is: " . $rev;
}



if (isset($_POST['palindrome'])) {
    $num = $_POST['mNumber'];
    palindrome($num);
}

function palindrome($num)
{
    global $result;

    $original = $num;
    $rev = 0;

    while ($num >= 1) {
        $rev = $rev * 10 + $num % 10;
        $num = $num / 10;
    }

    if ($rev == $original) {
        $result = "your choosen number is <b>palindrome</b> number";
    } else {
        $result = "your choosen number is <b>not palindrome</b> number";
    }
}


if (isset($_POST['armstrong'])) {
    $num = $_POST['mNumber'];
    armstrong($num);
}

function armstrong($num)
{
    global $result;

    $original = $num;
    $rev = 0;
    $cube = 0;
    while ($num >= 1) {
        $rem = $num % 10;
        $cube = $cube + pow($rem, 3);
        $num = $num / 10;
    }

    if ($cube == $original) {
        $result = "your choosen number is <b>armstrong</b> number";
    } else {
        $result = "your choosen number is <b>not armstrong</b> number";
    }
}

if (isset($_POST['fibonacci'])) {
    $num = $_POST['mNumber'];
    fibonacci($num);
}

function fibonacci($num)
{
    global $result;
    $first = 0;
    $second = 1;
    $check = 1;

    $result = "fibonacci series will be: " . $first . ',' . $second;

    while ($check < $num) {
        $current = $first + $second;
        $first = $second;
        $second = $current;
        $check++;

        $result .= rtrim("," . $current);
    }
}




if (isset($_POST['prime'])) {
    $num = $_POST['mNumber'];
    prime($num);
}

function prime($num)
{
    global $result;
    $sum = 2;

    if ($num == $sum) {
        $result = "your chhosen number is even prime";
    } else {


        for ($i = 2; $i <= $num; $i++) {
            if ($num % $i == 0) {
                if ($num == $i) {
                    $result = "your choosen number is <b>prime number</b>";
                } else {
                    $result = "your choosen number is <b>not a prime number</b>";
                    break;
                }
            }
        }
    }
}


if (isset($_POST['primeRange'])) {
    $num = $_POST['mNumber'];
    primeRange($num);
}

function primeRange($num)
{
    global $result;
    if ($num >= 2) {
        $result = "prime numbers for your chhosen range is: 2";
        for ($i = 3; $i <= $num; $i++) {
            for ($j = 2; $j <= $i; $j++) {

                if ($i % $j == 0) {
                    if ($i == $j) {
                        $result .= rtrim("," . $j);
                        break;
                    } else {
                        break;
                    }
                } else {
                    continue;
                }
            }
        }
    } else {
        $result = "sorry, no prime numbers are available for given range";
    }
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice</title>


    <style>
        .container {
            margin: 0 50px;

        }

        .center {
            text-align: center;
        }

        .form-control {
            width: 250px;
            height: 30px;
            border-radius: 8px;
        }

        .m1 {
            margin: 10px;
        }

        .m2 {
            margin: 20px;
        }

        .m3 {
            margin: 30px;
        }

        .m4 {
            margin: 40px;
        }

        .m5 {
            margin: 50px;
        }

        .p1 {
            padding: 10px;
        }

        .p2 {
            padding: 20px;
        }

        .p3 {
            padding: 30px;
        }

        .p4 {
            padding: 40px;
        }

        .p5 {
            padding: 50px;
        }

        .myBtn {
            width: 100px;
            height: 25px;
            box-shadow: 1px 1px 1px black;
        }

        .factorial {
            background-color: gray;
            color: white;
        }

        .reverse {
            background-color: lightcoral;
            color: white;
        }

        .palindrome {
            background-color: seagreen;
            color: white;
        }

        .armstrong {
            background-color: powderblue;
        }

        .fibonacci {
            background-color: violet;

        }

        .prime {
            background-color: wheat;
        }

        .primeRange {
            background-color: lightsalmon;
        }


        .normal {
            background-color: teal;
            color: whitesmoke;
        }

        .pdo {
            background-color: lightslategrey;
            color: whitesmoke
        }

        .session{
            background-color: darkslategray;
            color: whitesmoke;
        }


        .cookie{
            background-color: darkturquoise;
            
        }
    </style>
</head>

<body>

    <div class="container">

        <form action="" method="post">

            <input type="text" class="form-control" name="mNumber" id="mNumber" placeholer="Enter the Number" value="<?php if (isset($num)) {
                                                                                                                            echo $num;
                                                                                                                        } ?>">

            <input type="submit" name="factorial" class="myBtn m1 factorial" value="Factorial">

            <input type="submit" name="reverse" class="myBtn reverse m1" value="Reverse">

            <input type="submit" name="palindrome" class="myBtn m1 palindrome" value="Palindrome">

            <input type="submit" name="armstrong" class="myBtn m1 armstrong" value="Armstrong">


            <input type="submit" name="fibonacci" class="myBtn m1 fibonacci" value="Fibonacci">

            <input type="submit" name="prime" class="myBtn m1 prime" value="Prime">

            <input type="submit" name="primeRange" class="myBtn m1 primeRange" value="Prime Range">



        </form>

    </div>

    <div class="container center p5">
        <?php
        if (isset($result)) {
            echo $result;
        } else {
            echo "Your Result will be displayed here";
        }
        ?>

    </div>




    <?php

    echo "<br><hr><h3 style='text-align:center'>Some Patterns to practice</h3>";



    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }

    echo "<hr>";

    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }

    for ($p = 5; $p >= 1; $p--) {
        for ($q = 1; $q <= $p; $q++) {
            echo "*";
        }
        echo "<br>";
    }

    echo "<hr>";

    for ($x = 1; $x <= 15; $x++) {
        for ($y = 1; $y <= $x; $y++) {
            if ($y <= (15 - $x)) {
                echo "&nbsp;" . "&nbsp;";
            } else {
                echo "*";
            }
        }
        echo "<br>";
    }


    echo "<hr>";

    for ($x = 1; $x <= 15; $x++) {
        for ($y = 1; $y <= $x; $y++) {
            if ($y <= (15 - $x)) {
                echo "&nbsp;" . "&nbsp;";
            } else {
                echo "*";
            }
        }
        echo "<br>";
    }

    for ($x = 16; $x >= 1; $x--) {
        for ($y = 1; $y <= $x; $y++) {
            if ($y <= (16 - $x)) {
                echo "&nbsp;" . "&nbsp;";
            } else {
                echo "*";
            }
        }

        echo "<br>";
    }



    echo "<br><hr><h3 style='text-align:center'>Some Mysql to practice</h3>";



    if (isset($_POST['normal'])) {
        $con = mysqli_connect('localhost', 'root', '', 'myself');

        if ($con) {
        } else {
            exit('database connection failed');
        }


        $name = mysqli_escape_string($con, $_POST['fName']);
        $email = mysqli_escape_string($con, $_POST['fEmail']);

        $ogPhoto = $_FILES['photo']['name'];
        $tmpPhoto = $_FILES['photo']['tmp_name'];

        $finalName = time() . "-" . $ogPhoto;

        $fileSize = $_FILES['photo']['size'];
        //getting extension name
        $exploding = explode('.', $ogPhoto);
        $fileExtension = strtolower(end($exploding));


        // echo $tmpPhoto.$finalName.$fileSize.$fileExtension;

        $allowedExtension = ['jpg', 'jpeg', 'png'];
        $allowedFileSize = 200000; // 2MB


        if (!preg_match("/^[A-Za-z ]{4,}$/", $name)) {
            $error = "only text and spaces are allowed with minimum 4 characters";
        } else  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = "Invalid Email Format";
        } else if (!in_array($fileExtension, $allowedExtension)) {
            $error = "only allowed jpg, jpeg and png formats";
        } else if ($fileSize > $allowedFileSize) {
            $error = "maximum size should be of 2MB";
        } else {
            //  move_uploaded_file($tmpPhoto, 'myPhoto/' . $finalName);

            move_uploaded_file($tmpPhoto, 'myPhoto/' . $finalName);
            // echo $upload;

            $sql = "INSERT INTO users(name, email, photo) values ('$name','$email','$finalName')";
            $query = mysqli_query($con, $sql);

            if ($query) {
                $resultNormal = "<div style='color:green'>Submitted successfully via Normal Method</div>";
            } else {
                $resultNormal = "<div style='color:red'>Something went wrong via Normal Method</div>";
            }
        }
    }


    if (isset($_POST['pdo'])) {

        try {
            $pdo = new PDO('mysql:host=localhost;dbname=myself', 'root', '');
        } catch (PDOException $e) {
            exit('database error');
        }


        $name =  $_POST['fName'];
        $email =  $_POST['fEmail'];

        $ogPhoto = $_FILES['photo']['name'];
        $tmpPhoto = $_FILES['photo']['tmp_name'];

        $finalName = Date('Y-m-d') . "-" . $ogPhoto;

        $fileSize = $_FILES['photo']['size'];
        //getting extension name
        $exploding = explode('.', $ogPhoto);
        $fileExtension = strtolower(end($exploding));


        // echo $tmpPhoto.$finalName.$fileSize.$fileExtension;

        $allowedExtension = ['jpg', 'jpeg', 'png'];
        $allowedFileSize = 200000; // 2MB


        if (!preg_match("/^[A-Za-z ]{4,}$/", $name)) {
            $error = "only text and spaces are allowed with minimum 4 characters";
        } else  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = "Invalid Email Format";
        } else if (!in_array($fileExtension, $allowedExtension)) {
            $error = "only allowed jpg, jpeg and png formats";
        } else if ($fileSize > $allowedFileSize) {
            $error = "maximum size should be of 2MB";
        } else {
            //  move_uploaded_file($tmpPhoto, 'myPhoto/' . $finalName);

            move_uploaded_file($tmpPhoto, 'myPhoto/' . $finalName);
            // echo $upload;

            saveData($name, $email, $finalName);
        }
    }

    function saveData($name, $email, $photo)
    {
        global $pdo, $resultPdo;

        $query = $pdo->prepare('insert into users(name, email,photo) values(?,?,?)');
        $query->bindValue(1, $name);
        $query->bindValue(2, $email);
        $query->bindValue(3, $photo);
        $query->execute();


        if ($query) {
            $resultPdo = "<div style='color:green'>Submitted successfully via Pdo Method</div>";
        } else {
            $resultPdo = "<div style='color:red'>Something went wrong via Pdo Method</div>";
        }
    }




    ?>

    <div class="container center">

        <?php



        if (isset($resultNormal)) {
            echo $resultNormal;
        }

        if (isset($resultPdo)) {
            echo $resultPdo;
        }

        ?>


        <form action="" method="post" enctype="multipart/form-data">

            <input type="text" class="form-control" name="fName" id="fName" placeholder="Enter Full Name"><br><br>
            <input type="email" class="form-control" name="fEmail" id="fEmail" placeholder="Enter Full Email">
            <br><br>

            <input type="file" class="form-control" name="photo" id="photo">
            <br><br>
            <?php



            if (isset($error)) {
                echo "<div style='color:red'>" . $error . "</div>";
            }

            ?>

            <br><br>


            <input type="submit" name="normal" value="Normal" class="myBtn m2 normal">
            <input type="submit" name="pdo" value="pdo" class="myBtn m2 pdo">
        </form>





    </div>

    <br>
    <hr><br>

    <div class="contaoner center">
        <table style="margin:auto;width:80%" border=1>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Photo</th>
                <th>Time</th>
            </tr>

            <?php
            $con = mysqli_connect('localhost', 'root', '', 'myself');

            if ($con) {
            } else {
                exit('database connection failed');
            }
            $x = 1;

            $fetch = "select * from users order by id desc";
            $fetchQuery = mysqli_query($con, $fetch);
            while ($data = mysqli_fetch_assoc($fetchQuery)) {

                echo "
                    <tr>
                        <td>" . $x . "</td>
                        <td>" . $data['name'] . "</td>
                        <td>" . $data['email'] . "</td>
                        <td><img style='width:50px;height:50px;' src='myPhoto/" . $data['photo'] . "' alt='noImage'></td>
                        <td>" . $data['time'] . "</td>
                    </tr>
                   
                ";

                $x++;
            }

            ?>

        </table>
    </div>



    <br>
    <hr><br>



    <?php
    $con = mysqli_connect('localhost', 'root', '', 'myself');

    if ($con) {
    } else {
        exit('database connection failed');
    }

    if(isset($_POST['session'])){
        // echo "session works";

        $username =mysqli_escape_string($con,$_POST['username']);
        $checkUsername = "select * from users where email='$username' limit 1";

        $processUser = mysqli_query($con,$checkUsername);
        $countUser = mysqli_fetch_row($processUser);


        if($countUser>0){
            // echo "username found";
            
         
            $_SESSION['username'] = $username;
            $sessionSuccess = "<div style='color:green'>Logged In successful via session!!</div>";
            header('refresh:2, url=my_session.php');
        }else{
            // echo "username not found";
            $sessionError = "<div style='color:red'>No, Username Found</div>";
        }
    }


    if (isset($_POST['cookie'])) {
        // echo "cookie works";

        $con = mysqli_connect('localhost', 'root', '', 'myself');

        if ($con) {
        } else {
            exit('database connection failed');
        }



        $username = mysqli_escape_string($con, $_POST['username']);
        $checkUsername = "select * from users where email='$username' limit 1";

        $processUser = mysqli_query($con, $checkUsername);
        $countUser = mysqli_fetch_row($processUser);


        if ($countUser > 0) {
            // echo "username found";
           $myCookie = setcookie('tester',$username, time()+ 20);
           $cookieSuccess =  "<div style='color:green'>Logged In successful via cookie!!</div>";
            header('refresh:2, url=my_cookie.php');
        } else {
            // echo "username not found";
            $cookieError = "<div style='color:red'>No, Username Found</div>";
        }
    }

    ?>


    <div class="container center">

        <h3>Session and Cookie</h3>

        <?php 

            if(isset($sessionSuccess)){
                echo $sessionSuccess;
            }

        if (isset($sessionError)) {
            echo $sessionError;
        }
        
        ?>


        <form action="" method="post">
            <input type="text" name="username" id="username" class="form-control" placeholder="please, enter your username">

            <br><br>

            <input type="submit" name="session" class="myBtn m2 session" value="Session">
            <input type="submit" name="cookie" class="myBtn m2 cookie" value="Cookie">
        </form>

    </div>


</body>

</html>