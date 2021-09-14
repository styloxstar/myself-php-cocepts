<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advance Javascript Part 1</title>
    <link rel="stylesheet" href="advance1.css">
</head>

<body>

    <div class="container">
        <div class="heading">Event Propogation - Event Bubbling / Event Capturing </div>

        <p>
            by default:- event propogation is set to bubbling(down to up / inner to outer child), but if we want to chnge this to event capturing(top to down/ outer to inner child) then we can pass third argument boolean value true(event capturing on) or false(by default bubbling on) to addEventListener
        </p>

        <p>
            in case we want only inner child event to be executed with default bubbling, then to prevent outer/parent event we can use event.stopPropogation() in child element as shown above
        </p>

        <div class="text-center" id="mainDiv">
            <div id="outer" class="outer">
                <div class="inner" id="inner">

                </div>
            </div>
        </div>


        <script>
            let mainDiv = document.getElementById('mainDiv');
            let outer = document.getElementById('outer');
            let inner = document.getElementById('inner');
            let changeEvent = document.getElementById('inner');

            outer.addEventListener('click', () => {
                alert('outer div clicked');
            })

            // inner.addEventListener('click',()=>{
            //     alert('inner div called')
            // })

            changeEvent.addEventListener('click', (event) => {
                alert('event propagation chnaged');
                event.stopPropagation();
            })
        </script>


    </div>

    <div class="container">
        <div class="heading">Higher order functions - HOF and Callback Function</div>

        <p>
            function which takes anoher function as an argument is Higher order function
        </p>
        <p>
            function which gets passed as an argument to another function is known as callback function
        </p>

        <script>
            const add = (a, b) => {
                return a + b;
            }


            const sub = (a, b) => {
                return a - b;
            }


            const mul = (a, b) => {
                return a * b;
            }


            const sub2 = (a, b) => {
                return a / b;
            }

            

            const calculator = (num1, num2, operator) => {
                return operator(num1, num2)
            }

            console.log(calculator(12, 22, mul))
        </script>
    </div>


</body>

</html>