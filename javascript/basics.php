<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Javascript Basics</title>
    <link rel="stylesheet" href="basics.css">
</head>

<body>

    <div class="container">
        <div class="heading">Variable Declartion - var,let,const </div>

        <table border="1" width="100%">
            <tr>
                <th>Name</th>
                <th>Var</th>
                <th>Let</th>
                <th>Const</th>
            </tr>

            <tr>
                <td>Use Case</td>
                <td>
                    Function Scope, can be used anywhere inside function as well
                </td>
                <td>
                    Block Scope, can be changed
                </td>
                <td>
                    Block Scope, cannot be changed
                </td>
            </tr>

            <tr>
                <td>Description</td>
                <td>
                    can be accessible anywhere inside the code, but if declared in function then only that function will be able to access
                </td>
                <td>
                    can be accessbile ony specific block of code
                </td>
                <td>
                    can be acccessible only specific block of code alsoit's value remain constant
                </td>
            </tr>

            <tr>
                <td colspan="4" style="text-align:center">Please, open console to see the exaple results</td>
            </tr>


            <tr>
                <td>Example:</td>
                <td>
                    <script>
                        var info = "deepak"

                        function name() {
                            var age = 29
                            // document.write(info);
                            console.log(info);
                        }


                        console.log(age)

                        name();
                    </script>

                </td>

                <td>
                    <script>
                        let myName = "dpk";
                        // document.write(myName);

                        function myInfo() {

                            console.log(myName);

                            if (true) {
                                let lastName = 'gautam';
                            }

                            console.log(lastName)
                        }


                        myInfo()
                    </script>



                </td>
                <td>
                    <script>
                        const leap = 2020

                        let leap = 2024


                        console.log(leap)
                    </script>


                </td>
            </tr>


        </table>



    </div>


    <div class="container">
        <table border="1" width="100%">
            <div class="heading">DataTypes</div>
            <tr>
                <th>Undefined</th>
                <th>Boolean</th>
                <th>Number</th>
                <th>String</th>
                <th>BigInt(ES2019)</th>
                <th>Symbol(ES2019)</th>
            </tr>

            <tr>
                <td>
                    var declared but not defined(value not assigned)
                </td>
                <td>
                    True or False depending on condition
                </td>
                <td>
                    Data of type Int
                </td>
                <td>
                    Data of type String
                </td>
                <td>
                    Extended Version of Int (Number)
                </td>
                <td></td>
            </tr>

        </table>


        <div class="heading">
            Rules and Bugs
        </div>

        <p>
            we can not add one string and one number datatype but we can substract it, that is first bug in javascript
        </p>

        <p>
            we can concatenate two strings and get output but if minus(-) operator used , then it will throw NaN(not a number error)
        </p>

        <p>
            isNaN(var) is used to check if variable is number or not, if variable is number then it will return <strong>False</strong>, other wise it will return <strong>True</strong>
        </p>
    </div>


    <div class="container">
        <div class="heading">Operators and Expressions</div>

        <table border='1' width="100%">
            <tr>
                <th>Arithmatic Operators</th>
                <th>Assignment Operators</th>
                <th>Comparision Operators</th>
                <th>Logical Operators</th>
                <th>String Concatenation</th>
                <th>Ternary Operators</th>
            </tr>

            <tr>
                <td>+, -, *, /</td>
                <td>+=, -=, *=, /=, ++, --</td>
                <td>==, ===, !=, >=, <= ,> ,< </td>
                <td>&&, ||, != </td>
                <td>string1 + string2</td>
                <td>varible ? output1: output2</td>
            </tr>

            <tr>
                <td colspan="6" style="text-align:center">Please, open console to see below example output</td>
            </tr>

            <tr>
                <td>

                    <script>
                        var a = 10;
                        var b = 20;

                        console.log(a + b)
                        console.log(a - b)
                        console.log(a * b)
                        console.log(a / b)
                    </script>

                </td>
                <td>
                    <script>
                        var aa = 10;
                        var num = aa++;
                        console.log(aa + 'and' + num);
                        console.log('varible num will have intial vaue of aa befor incrementing');

                        var num2 = ++aa;
                        console.log(aa + 'and' + num);
                        console.log('varible num will have incremented vaue of aa after incrementing');

                        aa += 20;
                        console.log(aa);
                    </script>


                </td>
                <td>
                    <script>
                        let ad = 10;
                        let bd = '10';
                        let cd = 20

                        if (ad == bd) {
                            console.log(ad)
                        } else {
                            console.log("not equal")
                        }


                        console.log("== check if values are matched but === checks its type as well")


                        if (ad === bd) {
                            console.log(ad)
                        } else {
                            console.log("not equal")
                        }

                        if (ad > cd) {
                            console.log("ad is largest value")
                        } else {
                            console.log("cd is largest value")
                        }
                    </script>

                </td>
                <td>
                    <script>
                        let aaa = 20
                        let bbb = 12
                        let ccc = -15

                        if (ccc > 0 && ccc < 100) {
                            console.log("and operator check for all condition to be true")
                        } else {
                            console.log("condition failed")
                        }

                        if (ccc > 0 || ccc < 100) {
                            console.log("and operator check for any condition to be true");
                        } else {
                            console.log("no condition matched");
                        }

                        if (a != 12) {
                            console.log("not equal to operator checks if value is not equal to data");
                        }
                    </script>


                </td>
                <td>
                    <script>
                        let fname = "Deepak";
                        let lname = " Gautam";

                        console.log("Deepak Gautam")
                    </script>

                </td>
                <td>
                    <script>
                        console.log("Ternary operator is shortcut to check the condition");

                        let myAge = 28;

                        console.log((myAge > 18) ? "allowed" : "not allowed");
                    </script>
                </td>
            </tr>

        </table>


    </div>


    <div class="container">
        <div class="heading">Control-Structure</div>

        <table border="1" width="100%">
            <tr>
                <th>If Condition</th>
                <th>If-Else Condition</th>
                <th>If-Else...Else-If Condition</th>
                <th>While Loop</th>
                <th>Do While Loop</th>
                <th>For Loop</th>
            </tr>

            <tr>
                <td colspan="6" style="text-align:center">Please, open console to see below result</td>
            </tr>


            <tr>
                <td>
                    <script>
                        let mAge = 28;

                        if (mAge > 18) {

                            console.log("You are adult")
                        }
                    </script>
                </td>
                <td>
                    <script>
                        if (mAge > 18) {
                            console.log("You are adult")
                        } else {
                            console.log("You are not Adult")
                        }
                    </script>
                </td>
                <td>
                    <script>
                        if (mAge > 18) {
                            console.log("You are adult")
                        } else if (mAge > 15) {
                            console.log("You are semi-adult")
                        } else {
                            cosole.log("you are just child")

                        }
                    </script>
                </td>
                <td>
                    <script>
                        console.log("print 1-10 numbers using while loop")
                        let num1 = 1;
                        while (num1 < 11) {
                            console.log(num1);
                            num1++;
                        }
                    </script>

                </td>
                <td>
                    <script>
                        console.log("print 1-10 numbers using do- while loop")
                        let num3 = 1;
                        do {
                            console.log(num3);
                            num3++;
                        } while (num3 < 11);


                        console.log("do-while loop prints atleast one output, even if the condition haven't met")

                        do {
                            console.log(num3)
                        } while (num3 > 20);
                    </script>


                </td>
                <td>
                    <script>
                        console.log("print 1-10 numbers using for loop")
                        for (let i = 1; i <= 10; i++) {
                            console.log(i)
                        }


                        let friends = ['dpk', 'devil', 'aman', 'harish', 'ram', 'abhijit'];

                        for (friend in friends) {
                            console.log(friend);
                        }

                        for (friend of friends) {
                            console.log(friend);
                        }
                    </script>


                </td>
            </tr>
        </table>



    </div>



    <div class="container">
        <div class="heading">Functions</div>

        <p>Please, open console for below function explaination</p>

        <script>

            console.log('values passed while calling function is known as Arguments, while in function values are called parameters')

            function add(aa,bb){
                console.log(aa+bb)
            }

            add(12,22);

            function checkAdult(age){

                if(age>18){
                    return "you are adult";
                }else{
                    return "you are not allowed";
                }
            }

            console.log("its important to call function inside console to get return based function")
           console.log( checkAdult(17));


           let edu = function(education){

                if(education>12){
                    console.log('eligible')
                }else{
                    console.log('not eligible')
                }
           }


            console.log('when function is defined in some varible, that function is now as anonymus function and that variable known as function expression ')

            console.log('to call anonymus function, we can to call that varible and pass arguments to that varible only like below')

           edu(15);  
           

        
        </script>
    
    </div>







    <!-- <script src="basics.js"></script> -->
</body>

</html>