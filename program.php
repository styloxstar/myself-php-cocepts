<?php


echo "<h4>Reference Number</h4>";


$aaa = 10;
$bb = 'aaa';
$cc = $$bb;
echo $cc;


echo "<br><hr>";

echo "<h4>Replacing the number without using third variable</h4>";

$f1 =22;
$s1 = 8;

echo "original value of first variable is: ".$f1.' and second value is; '.$s1."<br>";

$f1=$f1+$s1;
$s1=$f1-$s1;
$f1=$f1-$s1;
echo "first value becomes: ".$f1.' and second value becomes: '.$s1;
echo "<br><hr>";
echo "<h4>Replacing the number using third variable</h4>";
$f2= 12;
$s2=10;
$t1= $f2;
$f2=$s2;
$s2=$t1;
echo "first value becomes: ".$f2.' and second value becomes: '.$s2;
echo "<br><hr>";


if (isset($_POST['factorial'])) {
    $number = $_POST['no'];
    factorial($number);
}

if (isset($_POST['reverse'])) {
    $number = $_POST['no'];
    reverse($number);
}

if (isset($_POST['palindrome'])) {
    $number = $_POST['no'];
    palindrome($number);
}

if (isset($_POST['armstrong'])) {
    $number = $_POST['no'];
    armstrong($number);
}

if (isset($_POST['fibonacci'])) {
    $number = $_POST['no'];
    fibonacci($number);
}


if (isset($_POST['prime'])) {
    $number = $_POST['no'];
    prime($number);
}




if (isset($_POST['primeRange'])) {
    $number = $_POST['no'];
    primeRange($number);
}




function factorial($num)
{
    global $result;
    // $sum=0;
    $fact = 1;
    while ($num >= 1) {
        $fact = $fact * $num;
        $num--;
    }

    $result = "the factorial of number is:" . $fact;
}


function reverse($num)
{
    global $result;
    // $sum=0;
    $rev = 0;
    while ($num >= 1) {
        $rev = $rev * 10 + $num % 10;
        $num = $num / 10;
    }
    $result = "the factorial of number is:" . $rev;
}


function palindrome($num)
{
    global $result;
    // $sum=0;
    $original = $num;
    $rev = 0;
    while ($num >= 1) {
        $rev = $rev * 10 + $num % 10;
        $num = $num / 10;
    }
    // $result = "the factorial of number is:" . $rev;

    if ($original == $rev) {
        $result = "the number is palindrome number";
    } else {
        $result = "the number is not a palindrome number";
    }
}


function armstrong($num)
{
    global $result;
    // $sum=0;
    $original = $num;
    $sum = 0;

    while ($num >= 1) {

        $rem = $num % 10;
        $cubes = pow($rem, 3);
        // echo "<br>".$cubes;
        $sum = $sum + $cubes;
        $num = $num / 10;
        // echo "<br>". $sum;
    }
    // $result = "the factorial of number is:" . $sum;
    if ($original == $sum) {
        $result = "the number is armstrong number";
    } else {
        $result = "the number is not a armstrong number";
    }
}



function fibonacci($num)
{
    global $result;

    $check = 0;
    $first = 0;
    $second = 1;

    $result = "fibonacci is:" . $first . ", " . $second;

    while ($check < $num) {

        $curr = $first + $second;
        $first = $second;
        $second = $curr;
        $check++;

        $result .= ", " . $curr;
    }
}


function prime($num)
{
    global $result;

    if ($num == 2) {
        $result = "The number is prime um number";
    } else {

        for ($i = 2; $i <= $num; $i++) {
            if ($num % $i == 0) {

                echo "<br>" . $i;

                if ($num == $i) {
                    $result = "the number is prime number";
                } else {
                    $result = "the number is not a prime number";
                    break;
                }
            }
        }
    }
}


function primeRange($num)
{
    global $result;


    $primeSum = 2;


    if ($num >= $primeSum) {
        $result = "the prime numbers are: " . $primeSum;

        for ($i = 3; $i <= $num; $i++) {

            for ($j = 2; $j <= $i; $j++) {
                if ($i % $j == 0) {
                    // echo "<br>".$j;
                    if ($i == $j) {
                        $result .= ", " . $j;
                        break;
                    } else {
                        break;
                    }
                }
            }
        }
    } else {
        $result = "no prime numbers are there";
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
</head>

<body>


    <div style="margin-top:7.5em;">


        <form action="" method="post" style="width:75%;margin:auto">

            <fieldset style="padding:5%;">
                <legend>click on different buttons to get different results</legend>

                <input type="number" name="no" id="no" placeholder="please, enter a number" value="<?php if (isset($number)) {
                                                                                                        echo $number;
                                                                                                    } ?>">

                <input type="submit" name="factorial" value="factorial">
                <input type="submit" name="reverse" value="reverse">
                <input type="submit" name="palindrome" value="palindrome">
                <input type="submit" name="armstrong" value="armstrong">

                <input type="submit" name="fibonacci" value="fibonacci">

                <input type="submit" name="prime" value="prime">

                <input type="submit" name="primeRange" value="primeRange">


                <div style="margin-top:20px;font-weight:bold;font-size:18px;">
                    <?php
                    if (isset($result)) {

                        echo $result;
                    }
                    ?>




                </div>
            </fieldset>


        </form>


        <div style="margin-top:15px;display:flex">
            <div class="pattern">

                <?php

                for ($i = 1; $i <= 5; $i++) {
                    for ($j = 1; $j <= $i; $j++) {
                        echo "*";
                    }
                    echo "<br>";
                }
                ?>


            </div>
            <div class="pattern">
                <?php

                for ($i = 1; $i <= 5; $i++) {
                    for ($j = 1; $j <= $i; $j++) {
                        echo "*";
                    }
                    echo "<br>";
                }

                for ($k = 6; $k >= 1; $k--) {
                    for ($l = 1; $l <= $k; $l++) {
                        echo "*";
                    }
                    echo "<br>";
                }



                ?>


            </div>
            <div class="pattern">

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
            <div class="pattern">

                <?php

                for ($i = 1; $i <= 5; $i++) {
                    for ($j = 1; $j <= $i; $j++) {
                        if ($j <= (5 - $i)) {
                            echo  "&nbsp";
                        } else {
                            echo "*";
                        }
                    }
                    echo "<br>";
                }
                ?>


            </div>

        </div>
    </div>

</body>

</html>