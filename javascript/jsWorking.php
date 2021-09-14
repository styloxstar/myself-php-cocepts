<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asynchronus Programming</title>
    <link rel="stylesheet" href="jsWorking.css">
</head>

<body>

    <div class="container">
        <div class="heading">Javascript Working</div>

        <table width="100%" border="1">
            <tr>
                <th>Hoisting</th>
                <td>
                    <p>
                        It is a mechanism where variables and function declaration are moved to top of their scope before the scope
                    </p>

                    <script>
                        console.log(mName);
                        var mName;
                        mName = "deepak";
                        console.log("in above code, as per javascript hoisting rule, socpe of mName will be executed, since there are nothing, it will defined as undefined, and then it will excecute rest of the code")

                        console.log("after ecmascript 2015, to avoid hoising, let/const is used instead of var and thus it will not set scope as undefined, it will instead throw an error that we havent defined varibale");

                        // console.log(myName) => throws an error thus commented
                        let myName;
                        myName = "devil";
                    </script>
                </td>
            </tr>

            <tr>
                <th>
                    Scope chain and Lexical Scoping
                </th>
                <td>
                    <p>
                        scope chain is used to resolve the values of variable names in JS
                    </p>
                    <p>
                        Scope chain in js is lexicallyd defined, which means we can see that scope chain will be by looking at the code
                    </p>
                    <p>
                        At te top, we have the Global Scope, which is the window object in the browser
                    </p>

                    <script>
                        console.log("Lexical Scoping means Now, the inner Function can get access to theier parent function variables but the vice-versa is not true");

                        let a = "hi, guys ";

                        const first = () => {
                            let b = "how are you ";
                            const second = () => {
                                let c = "Hi, i am fine, thank you!!!"
                                console.log(a + b + c)
                            }
                            second()
                            // console.log(a+b+c)
                            console.log("we can't use variable outside second(), but we can use variable a inside function second, it is know as lexical scoping, where child function can get access to properties of parent function, but parent function can not get access to child function")
                        }

                        first()
                    </script>
                </td>
            </tr>

            <tr>
                <th>Closures</th>
                <td>
                    <p>
                        A closure is a combination of a funtion bundled together(enclosed) with references to its surrounding state(the lexical environment
                    </p>

                    <p>
                        in, other words, closure gives you an access to an outer function's scope from an inner function
                    </p>

                    <script>
                        console.log("in javascript, closures are created every time a function is cretaed, at function creation time");
                        const outerFun = (a) => {
                            let b = 20;
                            const innerFun = () => {
                                let sum = a + b
                                console.log(`sum of two numbers would be: ${sum}`)
                            }

                            innerFun()
                        }

                        outerFun(5)


                        console.log("in above, example, value of a is passed to parent function an b is declared in parent as well, and when we try to access both variable from inner function, then due to closures, we can access and perform operation based on that")

                        console.log("but what if we'll retturn inner function instead of calling function, will see in below")


                        const outerFun1 = (a) => {
                            let b = 20;
                            const innerFun1 = () => {
                                let sum = a + b
                                console.log(`sum of two numbers would be: ${sum}`)
                            }

                            return innerFun1
                        }

                        console.log(outerFun1(5))
                        console.dir(outerFun1(10))

                        console.log("as we can see, it returns, if we'll run the code in browser console, then it will return function and values inside closure");
                    </script>
                </td>
            </tr>
        </table>

    </div>

    <div class="container">
        <div class="heading">
            Asynchronus Programming
        </div>


        <table border="1" width="100%">
            <tr>
                <th>synchronus vs asynchronus</th>
                <td>
                    when there multiple operations to perform synchronus programming waits for one tasks to finish, after completing the first, it will perform another operation, while asynchronus programming doesn't wait, it performs the operation, if task1 taking time, then it will not wait and perform another tasks
                </td>
            </tr>


            <script>
                
                console.log("synchronus");


                const fun2 = () => {
                    console.log("function 2 called")
                }

                const fun1 = () => {
                    console.log("function 1 called")
                    fun2()
                    console.log("function 1 called again")
                }


                fun1()

                console.log("Asynchronus")


                const myFun2 = () => {

                    setTimeout(() => {
                        console.log("function 2 called")
                    }, 2000)
                }

                const myFun1 = () => {
                    console.log("function 1 called")
                    myFun2()
                    console.log("function 1 called again")
                }

                myFun1()

                console.log("as we can see in above example, synchronus programming waited for funct2() be called where as in asynchronus programming, it executed other tasks as well without waiting for completion of some other task")
            </script>
        </table>
    </div>

</body>

</html>