<?php
echo "References <hr>";
$c = 23;
$a = 'c';
$b = $$a;
echo $b;


echo "<br><hr>";

echo "swapping data using third variable";

$f1 = 10;
$s1 = 12;

echo "<br>current value of f1 is: " . $f1 . " and current value of s1 is: " . $s1;
$t1 = $f1;
$f1 = $s1;
$s1 = $t1;

echo "<br>value of f1 becomes: " . $f1 . " and value of s1 becomes: " . $s1;



echo "<br><br>swapping data without using third variable<br>";
$f2 = 10;
$s2 = 12;
echo "current value of f2 is: " . $f2 . " and current value of s2 is: " . $s2;

$f2 = $f2 + $s2;
$s2 = $f2 - $s2;
$f2 = $f2 - $s2;

echo "<br>current value of f2 is: " . $f2 . " and current value of s2 is: " . $s2;


echo "<hr><hr><br>";


//some programs

//factorial

if (isset($_POST['factorial'])) {
    $num = $_POST['number'];
    factorial($num);
}

if (isset($_POST['reverse'])) {
    $num = $_POST['number'];
    reverse($num);
}

if (isset($_POST['palindrome'])) {
    $num = $_POST['number'];
    palindrome($num);
}

if (isset($_POST['armstrong'])) {
    $num = $_POST['number'];
    armstrong($num);
}



if (isset($_POST['fibonacci'])) {
    $num = $_POST['number'];
    fibonacci($num);
}


if (isset($_POST['prime'])) {
    $num = $_POST['number'];
    prime($num);
}








function factorial($num)
{
    global $result;
    // $result= $num;
    $fact = 1;
    while ($num >= 1) {
        $fact = $num * $fact;
        $num--;
    }
    $result = 'The factorial of Entered number is: ' . $fact;
}


function reverse($num)
{
    global $result;
    // $result= $num;

    $rev = 0;
    $sum = 0;


    while ($num >= 1) {
        $rev = $rev * 10 + $num % 10;
        $num = $num / 10;
    }

    $result = "The Reverse of number would be: " . $rev;
}


function palindrome($num)
{
    global $result;
    // $result= $num;

    $rev = 0;
    $original = $num;


    while ($num >= 1) {
        $rev = $rev * 10 + $num % 10;
        $num = $num / 10;
    }


    if ($rev == $original) {
        $result = "The Entered Number is <b>Palindrome Number</b>";
    } else {
        $result = "The Entered Number is <b>not a Palindrome Number</b>";
    }
}




function armstrong($num)
{
    global $result;
    // $result= $num;

    $cube = 0;
    $original = $num;


    while ($num >= 1) {
        $rem =  $num % 10;
        $cube = $cube + pow($rem, 3);
        $num = $num / 10;
    }

    // $result = $cube;

    if ($cube == $original) {
        $result = "The Entered Number is <b>Armstrong Number</b>";
    } else {
        $result = "The Entered Number is <b>Not an Armstrong Number</b>";
    }
}


function fibonacci($num)
{
    global $result;
    //  $result= $num;
    $check = 1;
    $first = 0;
    $second = 1;

    $result = "Fibonacci series for entered number is:" . $first . ", " . $second;

    while ($check < $num) {
        $current = $first + $second;
        $first = $second;
        $second = $current;
        $check++;

        $result .= ", " . $current;
    }
}



function prime($num)
{
    global $result;
    // $result = $num;

    if ($num == 2) {
        $result = "The Entered Number is <b>Prime Sum</b>";
    } else {

        for ($i = 2; $i <= $num; $i++) {
            if ($num % $i == 0) {
                if ($num == $i) {
                    $result = "The Entered number is <b>Prime Number</b>";
                } else {
                    $result = "The Entered Number is <b>not a Prime number</b>";
                    break;
                }
            }
        }
    }
}




if(isset($_POST['validate'])){
    $name=$_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    if(!preg_match("/^[a-zA-Z ]{3,}$/",$name)){
        $nameError="Only enter alphabets with minimum three characters";
    }else{
        $nameSuccess="Congrats, you can proceed to email now";
    }


    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $emailError="Invalid Email Format";
    }else{
        $emailSuccess="valid Email, proceed to mobile";
    }


    if (!preg_match("/^[6-9][0-9]{9}$/", $name)) {
        $mobileError = "Only Number Starting from 6-9 with exact 10 digits are allowed";
    } else {
        $mobileSuccess = "Congrats, you can register now";
    }



}




?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>

<body>


    <div class="container">
        <form class="my-3" action="" method="post">
            <div class="row">
                <div class="col-md-4">
                    <input type="text" class="form-control" name="number" id="number" placeholder="please, enter your number">
                </div>

                <div class="col-md-8">
                    <input type="submit" class="btn btn-small mx-2 btn-primary" name="factorial" value="Factorial">
                    <input type="submit" class="btn btn-small mx-2 btn-success" name="reverse" value="Reverse">
                    <input type="submit" class="btn btn-small mx-2 btn-info" name="palindrome" value="Palindrome">
                    <input type="submit" class="btn btn-small mx-2 btn-secondary" name="armstrong" value="Armstrong">
                    <input type="submit" class="btn btn-small mx-2 btn-dark" name="fibonacci" value="Fibonacci">
                    <input type="submit" class="btn btn-small mx-2 btn-warning" name="prime" value="Prime">
                </div>

            </div>


            <div class="my-3">
                <p class="lead">
                    <?php
                    if (isset($result)) {
                        echo $result;
                    } else {
                        echo "Your Result will be displayed here";
                    }

                    ?>
                </p>
            </div>


        </form>

    </div>


    <hr>
    <hr><br>

    <div class="text-center display-6">
        Patterns
    </div>


    <div class="row">
        <div class="col-md-3 p-5">
            <?php
            for ($p = 1; $p <= 5; $p++) {
                for ($j = 1; $j <= $p; $j++) {
                    echo "*";
                }
                echo "<br>";
            }

            ?>
        </div>
        <div class="col-md-3 p-5">
            <?php
            for ($p = 1; $p <= 5; $p++) {
                for ($j = 1; $j <= $p; $j++) {
                    echo "*";
                }
                echo "<br>";
            }



            for ($k = 5; $k >= 1; $k--) {
                for ($j = 1; $j <= $k; $j++) {
                    echo "*";
                }

                echo "<br>";
            }



            ?>



        </div>
        <div class="col-md-3 p-5">

            <?php

            for ($i = 1; $i <= 5; $i++) {
                for ($j = 1; $j <= $i; $j++) {
                    if ($j <= (5 - $i)) {
                        echo "x" . "x";
                    } else {
                        echo "*";
                    }
                }
                echo "<br>";
            }
            ?>


        </div>


        <div class="col-md-3 p-5">

            <?php

            for ($i = 1; $i <= 5; $i++) {
                for ($j = 1; $j <= $i; $j++) {
                    if ($j <= (5 - $i)) {
                        echo "&nbsp;";
                    } else {
                        echo "*";
                    }
                }
                echo "<br>";
            }
            ?>


        </div>
    </div>


    <hr>
    <hr><br>

    <div class="text-center display-6">
        PHP Validations
    </div>


    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="row py-2">
                <div class="col-md-4">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter a Name">
                </div>
                <div class="col-md-8">
                    <?php
                    if (isset($nameError)) {
                        echo "<p class='text-danger'>" . $nameError . "<p>";
                    }

                    if (isset($nameSuccess)) {
                        echo "<p class='text-success'>" . $nameSuccess . "<p>";
                    }

                    ?>

                </div>

            </div>


            <div class="row py-2">
                <div class="col-md-4">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter a email">
                </div>
                <div class="col-md-8">
                    <?php
                    if (isset($emailError)) {
                        echo "<p class='text-danger'>" . $emailError . "<p>";
                    }


                    if (isset($emailSuccess)) {
                        echo "<p class='text-success'>" . $emailSuccess . "<p>";
                    }

                    ?>

                </div>

            </div>


            <div class="row py-2">
                <div class="col-md-4">
                    <input type="number" class="form-control" name="mobile" id="mobile" placeholder="Enter a mobile">
                </div>
                <div class="col-md-8">
                    <?php
                    if (isset($mobileError)) {
                        echo "<p class='text-danger'>" . $mobileError . "<p>";
                    }

                    if (isset($mobileSuccess)) {
                        echo "<p class='text-success'>" . $mobileSuccess . "<p>";
                    }

                    ?>

                </div>

            </div>


            <div class="row py-4">
                <div class="col-md-3">
                    <input type="submit" class="btn btn-small btn-danger" name="validate" id="validate" value="Validate">
                
                </div>
            </div>



        </form>

    </div>











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>