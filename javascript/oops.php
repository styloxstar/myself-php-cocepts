<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Javscript - OOPS</title>
    <link rel="stylesheet" href="oops.css">
</head>

<body>


    <div class="container">
        <div class="heading">Javscript OOPS</div>

        <p>
            Object Literals is simply a key:value pair data structure
        </p>

        <p>
            storing variables and functions together in one container, we can refer this as an Objects
        </p>

        <p>
            please, open the console to see below results
        </p>



        <script>
            console.log("there are two ways to write objects, first method is follows")
            let info = {
                name: 'deepak',
                age: 28,
                intro: function() {
                    console.log(`my name is ${this.name} and i am ${this.age} years old`)
                },
                job: {
                    frontend: 'javascript',
                    backend: 'php',
                    database: 'mysql'
                }


            }


            console.log(info)
            console.log(info.name)
            console.log("since, there is already function defined in that object, we don't need to call console to get function data")
            info.intro()
            console.log(info.job);
            console.log(info.job.frontend);




            console.log("2nd way :- no need to write function as well after es6 ")

            let info2 = {
                name: 'deepak',
                age: 28,
                intro() {
                    console.log(`my name is ${this.name} and i am ${this.age} years old`)
                },
                job: {
                    frontend: 'javascript',
                    backend: 'php',
                    database: 'mysql'
                }


            }


            console.log(info2)
            console.log(info2.name)

            info2.intro()
            console.log(info2.job);
            console.log(info2.job.frontend);
        </script>
    </div>


    <div class="container">
        <div class="heading">
            This Object
        </div>

        <p>this object: - it contains current context, this can have different values depending on where it is placed</p>
        <p>console.log(this) -> refers to the current context and that is window global object</p>
        <p>Please, open console to see below example</p>


        <script>
            const obj = {
                myAge: 28,
                namer() {
                    console.log(this);
                }

            }

            obj.namer()
            console.log("now this inside object function will represnt that object itself")

            console.log("but this object will not work with fat arrow, it will return window object only ")

            const fatObj = {
                myAge: 28,
                namer: () => {
                    console.log(this);
                }

            }

            fatObj.namer()

            console.log("always remember to see window object and output, you have to run the code in browser console")
        </script>

    </div>


    <!-- <script src="oops.js"></script> -->
</body>

</html>