<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events in Javascript</title>
    <link rel="stylesheet" href="event.css">
</head>

<body>


    <div class="container">
        <div class="heading">Event in Javascript</div>
        <p>HTML events are "things" that happen to HTML elements</p>
        <p>when javascript is used in HTML pages, Javascript can "react" on these events</p>
        <p>HTML events:- can be soemthing the browser does, or something a user does for ex:- button clicked, input field was clicked</p>
        <p>javascript lets you code when events are detected</p>
        <p>HTML allows event handler attributes, with javascript code, to be added in HTML element</p>
        <p>there are manily 4 ways to write events, using inline event alert(), by calling a function, inline events like onclick="", using eventListeners i.e. addEventListeners</p>

        <button id="inline">Inline Event Calling</button>
        <button id="eventListner">using Add Event Listner</button>

        <button id="eObject">Event Object</button>

        <br>

        <p>Please, open console to see below example</p>


        <script>
            // alert('abc');
            const changeColor = () => {
                // document.body.style.backgroundColor = "teal";

                // alert("most used common way to call function")
            }

            changeColor();



            // inline method 
            let iButton = document.getElementById('inline');

            iButton.onclick = () => {
                alert('most common way to call inline event using callback function and using reference(decalared variable)')
            }


            // using addEventListener

            let eButton = document.getElementById('eventListner');

            eButton.addEventListener('click', () => {
                alert('calling function using addEventListener');
            })

            console.log("difference between onclick and addEventListner is that if onclick is used for multiple times then it will execute only one operation, using addeventListener() , in case of multiple operatiion, it will execute all of them")


            // event objects


            let myEventObject = document.getElementById('eObject');


            myEventObject.addEventListener('click', () => {
                alert('event objects')
                console.log(event)
                console.log('event provides all the iformation about events')
                console.log(event.target)
                console.log("event.target returns target element")
                console.log(event.type)
                console.log("event.type returns target event type");

            })
        </script>

    </div>



    <div class="container">
        <div class="heading">
            Mouse Events :- events that occur when the mouse interacts with HTML document belongs to MouseEvent Object
        </div>


        <div id="firstBlock" class="d-inline-block">abc</div>
        <div id="secondBlock" class="d-inline-block">pqr</div>
        <div id="thirdBlock" class="d-inline-block">xyz</div>

        <p>
            please, open console to see below example
        </p>

        <script>
            let firstBlock = document.getElementById('firstBlock');
            let secondBlock = document.getElementById('secondBlock');
            let thirdBlock = document.getElementById('thirdBlock');

            firstBlock.onmouseover = () => {
                // alert('mouse entered on first block');
                firstBlock.style.backgroundColor = "aqua";
                firstBlock.innerHTML = "Mouse Over";
            }

            firstBlock.addEventListener('mouseleave', () => {
                // alert('mouse left');

                firstBlock.style.backgroundColor = "purple";
                firstBlock.innerHTML = "Mouse Left";
            })


            secondBlock.onmouseenter = () => {
                // alert('mouse entered on second block');
                secondBlock.style.backgroundColor = "red";
                secondBlock.innerHTML = "Mouse Entered";
            }

            secondBlock.addEventListener('mouseleave', () => {
                // alert('mouse left');

                secondBlock.style.backgroundColor = "pink";
                secondBlock.innerHTML = "Mouse Leave";
            })


            thirdBlock.onmouseup = () => {
                // alert('mouse entered on third block');
                thirdBlock.style.backgroundColor = "blue";
                thirdBlock.innerHTML = "Mouse Up";
            }

            thirdBlock.addEventListener('mouseleave', () => {
                // alert('mouse left');

                thirdBlock.style.backgroundColor = "green";
                thirdBlock.innerHTML = "Mouse Leave";
            })
        </script>

    </div>



    <div class="container">
        <div class="heading">
            Time-Based Events
        </div>

        <p>window object allows execution of code at specified time intervals, these time intervals are called time events</p>
        <p>two methods of time events are setTimeOut(function, milliscond), setInterval(function, millisecond)</p>
        <p>setTimeOut(function, milliseconds) -> executes function after waiting a specified number of milliseconds</p>
        <p>setTimeInterval(function, milliseconds) -> same as setTimeOut(), but repeats the execution of the function continiously</p>

        <p>please, open console to see below example</p>

        <h3 class="my-4 text-center"> setTimeOut and clearTimeOut</h3>

        <button id="displayName">Click to display, my Name</button>
        <div id="myName">


            <br>

            <button class="btn btn-success mx-3" onclick="myVar = setTimeout(checkTime,5000)"> Click Me</button>


            <button class="btn btn-info mx-3" onclick="clearTimeout(myVar)"> Stop Before 5 Seconds</button>
            <script>
                function checkTime() {
                    alert("hi");
                }
            </script>

        </div>

        <script>
            let nameButton = document.getElementById('displayName');
            let myName = document.getElementById('myName');

            // nameButton.addEventListener('click',()=>{
            //     setTimeout(() => {
            //             myName.innerHTML = "Deepak Gautam";
            //     }, 3000);
            // })

            let showName = () => {
                setTimeout(() => {
                    myName.innerHTML = "Deepak Gautam";
                }, 2000);
            }


            nameButton.addEventListener('click', showName);
        </script>


        <div>
            <h3 class="my-4 text-center"> setInterval and clearInterval</h3>

            <p class="lead text-center" id="myText">can you stop me, when i reached 5</p>

            <button class="btn btn-info mx-3" id="startBtn"> start counter</button>

            <button class="btn btn-info mx-3" id="stopBtn"> stop counter</button>


            <script>
                let myText = document.getElementById('myText');
                let startBtn = document.getElementById('startBtn');
                let stopBtn = document.getElementById('stopBtn');
                let num = 0;
                let setCounter


                let startCounter = () => {
                    myText.innerHTML = " ... 😒😪 ...";


                    setCounter = setInterval(() => {
                        myText.innerHTML = `${num}`;
                        num++;
                    }, 1000);

                }


                let stopCounter = () => {
                    if (num == 6) {
                        alert("congrats, you did it!!!!! 😄")
                    } else {
                        alert("sorry, you failed, please refresh the page and try again 😢")
                    }

                    clearInterval(setCounter);
                    console.log('its very important clearInterval to work that setInterval should be assigned in varible like above, other wise it wont work')
                }


                startBtn.addEventListener('click',startCounter);
                stopBtn.addEventListener('click',stopCounter);
            </script>



        </div>


    </div>


    <script src="event.js"></script>
</body>

</html>