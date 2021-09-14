<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Loop</title>
    <link rel="stylesheet" href="eventLoop.css">
</head>

<body>
    <div class="container">
        <div class="heading">
            Event Loop
        </div>

        <p>
            every function has its own execution stack (own environment) where it performs various task within it
        </p>

        <p>
            javascript has various modules in event loop like global execution stack, execution stack, WEB APIs , MESSAGE QUEUE etc
        </p>

        <script>
            const fun2 = () => {
                setTimeout(() => {
                    console.log("fun 2 is called")
                }, 3000)
            }

            const fun1 = () => {
                console.log("fun 1 is starting...")
                fun2()
                console.log("fun 1 is ending");
            }

            fun1()

            console.log("in above process, event loop will be exceuting in following order")

            console.log("when we call fun1() -> it will go tp global excution stack, since every function has its own stack, it will perform all the operation");

            console.log("inside fun1() it will look for task, then executes first task i.e. console.log('fun1 is starting') , since console is also function it will have its own execution stack, after completuion of execution , it will go out of the stack, then it will check for other task i.e. calling fun2()");

            console.log("fun2() will have its own execution stack, and inside it has timer based event thus, thus its own enevironment, until the timer is eceuted, it will traverse timer function task to WEB APIS to hold the operation until , time finished, then it will check if fun() has anything else task other than timer based event");


            console.log("since, fun1() is in global execution task, then it will check for another task if any, after func2(), then executes that as well i.e. console.log('fun1 is eneding')")

            console.log("after the event timer expired, then it will be transfered from WEB APIs to Message Queue which will act based on FIFO (first in first out)")

            console.log("now from MESSAGE QUEUE, based on queue, the time based event will be transefered to Execution Stack to execute, transfering from MESSAGE QUEUE to EXECUTION STACK is known as EVENT LOOP");

            console.log("and thus in this way, it will perform all the operations")
        </script>

    </div>

</body>

</html>