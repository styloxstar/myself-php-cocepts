<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Javscript ES6 - 2015</title>
    <link rel="stylesheet" href="es6.css">
</head>

<body>


    <div class="container">
        <div class="heading">EcmaScript-2015</div>
        <p>
            Javascript was funded on 1996, Ecmascript came in 1997, and ES6 came in 2015
        </p>


        <table border="1" width="100%">
            <tr>
                <th>Let,Const and Var</th>
                <th>Template String / Literals</th>
                <th>
                    Fat Arrow Function
                </th>
            </tr>

            <tr>
                <td>Explained prevously</td>
                <td>Template string allows combinations of string and var data</td>
                <td>
                    we can use fat arrow function as callback function
                </td>

            </tr>

            <tr>
                <td colspan="3" style="text-align:center">Please, open console to see below result</td>
            </tr>

            <tr>
                <td>
                    Explained Earlier
                </td>
                <td>
                    <script>
                        let mname = 'deepak';
                        let age = 28;

                        console.log(`hello ${mname}, congarts, you are eligible as your age is ${age}`)
                    </script>


                </td>
                <td>

                    <script>
                        var add = (a, b) => {
                            console.log(`addition would be: ${a+b}`)
                        }


                        add(12, 10)
                    </script>



                </td>
            </tr>

        </table>



        <table border="1" width="100%" style="margin-top:50px;">
            <tr>
                <th>Destructing</th>
                <th>Object Properties => dynamaicallly adding key to object</th>
                <th>Rest Operator</th>
                <th>Spread operator</th>

            </tr>


            <tr>
                <td>
                    we can assign values to multiple varibale with single line of code
                    <br>
                    it's very important assign variable on proper position of data andwe can also add while assigning varible
                </td>
                <td>
                    dynamically adding data to objects
                </td>
                <td>
                    rest operator is used to pass as many varible to function parameter parameters
                </td>
                <td>
                    it it used to avoid overriding of original data, spread operator cretaes copy of original data, and that data can be used to perform any operation, we can also add additional data to copied ones using [...originalVariableName]
                </td>
            </tr>


            <tr>
                <td colspan="4" style="text-align:center">Please, Open Console to see below Example</td>
            </tr>


            <script>
                console.log("Array Destructring");

                const myBio = ['deepak', 'gautam', 28]

                console.log("normal way to print the output:-");

                let myFName = myBio[0];
                let myLName = myBio[1];
                let myAge = myBio[2];
                console.log(myAge);
                console.log("but using array destructing we can assign values to multiple varibale with single line of code")

                let [mFName, mLName, mAge] = myBio;
                console.log(mLName);


                console.log("it's very important assign variable on proper position of data andwe can also add while assigning varible")

                let [aName, aLName, aAge, aInterest = 'coder'] = myBio
                console.log(aInterest)


                console.log("object destructing")

                const myData = {
                    myFirstName: 'Deepak',
                    myLastName: 'Gautam',
                    myAges: 28
                }

                console.log("Normal Way")

                let fName = myData.myFirstName
                let age1 = myData.myAges;

                console.log(fName);
                console.log("Now with Object Destructing")

                let {
                    ffName,
                    llName,
                    aaAge,
                    interest = "developer"
                } = myData;

                console.log(myData)


                console.log("===========================================================");
                console.log("Object Properties :- dynamaicallly adding key to object");
                console.log("===========================================================");

                let yourName = "devil";

                const intro = {
                    yourName: 'how are you'
                }

                console.log(intro)
                console.log("above example doesnt print the value of yourName, insted it simply writes yourname, so if we want to add that value to objects , we need to use object properties using []")

                const intro2 = {
                    [yourName]: "how are you"
                }

                console.log(intro2)

                console.log("no need to write key and value, if key[] name is same as varible defined")


                const intro3 = {
                    yourName: yourName
                }

                console.log(intro3)


                console.log("rest operator:- rest operator is used to pass as many varible to function parameter parameters")

                const mySum = (...args) => {
                    let sum = 0;
                    let i = 0;
                    args.map(() => {


                        sum = parseInt(sum) + parseInt(args[i])
                        i++;
                        console.log(sum)
                    })

                    console.log(sum)
                }

                mySum(12, 22, 22, 11, 11);

                console.log("spread Operator: it it used to avoid overriding of original data, spread operator cretaes copy of original data, and that data can be used to perform any operation, we can also add additional data to copied ones using [...originalVariableName]")

                const color = ['red', 'green', 'blue']
                const myColor = [...color]
                console.log(myColor)

                const moreColors = [...color, 'yellow', 'aqua']
                console.log(moreColors)
            </script>



            <script>
                console.log("=============================================================");

                let myInfo = ['deepak', 28, 'web developer'];

                let [cName, cAge, cJob] = myInfo;
                console.log(cAge);

                let myInfo2 = {
                    name: 'dpk',
                    age: 29,
                    job: 'developer'
                }


                let rName, rAge, rJob = myInfo2;
                console.log(myInfo);



                // object properties

                let pName = "Last Name";

                let pInfo = {
                    [pName]: 'gautam'
                }

                console.log(pInfo);


                // spread 

                // let mNum = [1,8,2,5,11,20,5,9];
                let multi = ((...args) => {
                    let sum = 0;
                    let i = 0;

                    // return args;

                    args.map(() => {
                       sum = sum+ args[i]
                       i++
                       console.log(sum)
                    })
                })



                multi(1, 8, 2, 4, 7, 612, 31, 5);




                //spread 

                let rainbow = ['violet','blue','aqua','green','yellow','orange','red'];

                let = myRainBow = [...rainbow];

                console.log(myRainBow);


                let moreColored = [...rainbow,'indigo','teal'];
                console.log(moreColored);

            </script>

        </table>


    </div>

<!-- 
    <script src="es6.js"> -->
    </script>
</body>

</html>