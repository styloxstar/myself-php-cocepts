<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Javscript Advance 2</title>
    <link rel="stylesheet" href="advance2.css">
</head>

<body>
    <div class="container">
        <div class="heading">
            Function Currying
        </div>
        <p>
            Function Currying:- Currying is a technique of evaluating function with multiple arguments, into sequence of function with single argument
        </p>

        <p>
            In other words, when a function, instead of taking all arguments at one time, takes first one and returns new function that takes second one and returns new function which takes third one, and so forth, until all argument has been fulfilled
        </p>

        <script>
            const first = (a) => {
                return (b) => {
                    return (c) => {
                        console.log(`the sum of all the bumber would be ${a+b+c}`)
                    }
                }
            }

            first(12)(2)(3)

            console.log("we can also write the same with fat arrow cahaining, like below")

            const mySum = (num1) => (num2) => (num3) => console.log(num1 + num2 + num3)

            mySum(3)(2)(5)

            console.log("its very important to return inner function to accept the argument, as we can see above we have used three function with single calling with function currying, below is simple mthod of function currying")

            function sum(n1) {
                return function(n2) {
                    return function(n3) {
                        console.log(n1 + n2 + n3)
                    }
                }
            }

            sum(2)(30)(2)
        </script>


        <div class="heading">
            Callback Hell
        </div>

        <p>
            Callback Hell:- when calling function inside another again and again and so on, so it creates callback hell, to overcome this we have something called as Promices
        </p>

        <script>
            setTimeout(() => {
                console.log("work is done.")
                setTimeout(() => {
                    console.log("work is done..")
                    setTimeout(() => {
                        console.log("work is done...")
                        setTimeout(() => {
                            console.log("work is done....")
                            setTimeout(() => {
                                console.log("work is done.....")
                            }, 1000)
                        }, 1000)
                    }, 1000)
                }, 1000)
            }, 1000)
        </script>


        <div class="heading">
            JSON - Javascript Object Notation

            <script>
                console.clear()

                console.log("JSON.stringify(object):- turns a javascript object into JSON text and stores that JSON text in a string");

                var myObj = {
                    key1: 'some text',
                    key2: true,
                    key3: 5
                }
                console.log(typeof(myObj));

                var objectAsString = JSON.stringify(myObj);
                console.log(objectAsString)

                console.log("we can see in console that myObj now print data in string, we can also run typeof() to check type of data, please run in browser console")

                console.log("JSON.parse - turns a string of JSON text into Javscript Object")

                var stringAsObject = JSON.parse(objectAsString);
                console.log(stringAsObject)

                console.log("as we can see in the console, string data becomes objects once again")
            </script>
        </div>


    </div>


</body>

</html>