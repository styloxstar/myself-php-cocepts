<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Javascript - Math</title>
    <link rel="stylesheet" href="math.css">
</head>

<body>

    <div class="container">
        <div class="heading">Javascript Math Functions</div>


        <table border="1" width="100%">
            <tr>
                <th>Math.PI</th>
                <td>Returns PI Value</td>
            </tr>

            <tr>
                <th>Math.pow(x,y) </th>
                <td>Return exponentaional of x upto y</td>
            </tr>

            <tr>
                <th>Math.sqrt(x)</th>
                <td>Return square root of x</td>
            </tr>

            <tr>
                <th>Math.abs(x)</th>
                <td>Returns absolute(positive) value of x</td>

            </tr>


            <tr>
                <th>Math.ceil(x)</th>
                <td>returns the value of x rounded up to its nearest integer</td>
            </tr>

            <tr>
                <th>Math.floor(x)</th>
                <td>returns the value of x rounded down to its nearest integer</td>
            </tr>

            <tr>
                <th>Math.max(x,y,z,a,b,c)</th>
                <td>returns the maxiumum value</td>
            </tr>

            <tr>
                <th>Math.max(x,y,z,a,b,c)</th>
                <td>returns the minimum value</td>
            </tr>

            <tr>
                <th>Math.random()</th>
                <td>returns a random number between 0(inclusive) and 1(exclusive)</td>
            </tr>


            <tr>
                <th>Math.trunc(x)</th>
                <td>returns the integer part of a number</td>
            </tr>





        </table>


        <p>
            please,open a console to see below results
        </p>
    </div>


    <script>
        console.log(Math.PI)
        console.log(Math.pow(3, 4))
        console.log(Math.sqrt(25))
        console.log(Math.abs(-20))
        console.log(Math.ceil(4.3))
        console.log(Math.floor(4.9))
        console.log(Math.min(1, 2, 82, 11, 122, 636))
        console.log(Math.max(1, 2, 82, 11, 122, 636))
        console.log(Math.random())
        console.log(Math.trunc(-22.33))
    </script>

<!-- 
    <script src="math.js"></script> -->
</body>

</html>