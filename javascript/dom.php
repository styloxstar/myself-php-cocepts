<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Javscript - DOM and BOM</title>
    <link rel="stylesheet" href="dom.css">
</head>

<body>
    <div class="container">
        <div class="heading">
            DOM => Data Object Model and BOM => Browser Object Model

            <p>window - window is the main container or we can can say the global Object and any operations related to entire browser window can be part of window object</p>
            <br>
            <p>all the members like objects, methods r properties. if they are part of window object then we do not refer window object</p>
            <br>

            <p>Window has methods, properties and Objects. ex. setTimeOut() or setTimeInterval() are the methods, where as Document is the object of window, also has Screen Object with properties describing the physical display</p>

            <br>
            <p>
                DOM - DOM is the child of window object
            </p>

            <p>
                In DOM, we need to refer the document, if we want to use the document object, methods or peoperties
            </p>

            <p>
                Document is just object of global Window, which deals with document, the HTML elements themselves
            </p>

            <br>

            <p>
                DOM deals with the document, the HTML elements themselves, eg:- document and all travarsal you would do in it, events etc
            </p>
            <p>
                BOM deals with browser components aside from the document, like history, location, navigator and screen etc
            </p>

            <div class="heading">
                DOM - Data Object Model
            </div>

            <p>
                please, open console to see below example
            </p>

            <script>
                console.log(document)
                console.log("document -> returns all the data inside the document")
                console.log(document.head)
                console.log("document.head -> returns all the data inside the head of the document")
                console.log(document.body)
                console.log("document.body -> return all the data inside the body of the document")
                console.log(document.body.childNodes);
                console.log("document.body.childNodes used to find the nodes of element(now body) we want to find, it includes tab, enter and whitespace")
                console.log(document.body.children);
                console.log("document.body.children returns the total children resides within document body excluding space, tab etc");
                console.log(document.body.children.length)
                console.log("returns the length of children nodes present within document body");

                console.log(document.body.hasChildNodes())
                console.log("docyument.body.hasChildNodes() checks if any child nodes are present within body, and produce boolean value")

                console.log("how to find child first in dom tree:-")


                console.log(document.body.firstChild);
                console.log("document.body.firstchild -> returns the first text, whitespace or tab present in body ")
                console.log(document.body.firstElementChild)
                console.log("document.body.firstElementChild -> return the first main child present in the body")
                console.log(document.body.firstElementChild.firstElementChild)
                console.log('document.body.firstElementChild.firstElementChild -> returns the first sub child depending upon the node present in the body')

                console.log("now we'll change the color of the first child element")

                let firstChild = document.body.firstElementChild.firstElementChild
                firstChild.style.color = "red";

                console.log("Parent node");

                console.log(document.body.parentNode);
                console.log(document.body.parentElement);
                console.log(document.head.parentElement);

                console.log("sibling nodes for body");

                console.log(document.body.nextSibling);
                console.log(document.body.nextElementSibling);
                console.log(document.previousSibling);
                console.log(document.body.previousElementSibling);

                console.log("sibling nodes for head");

                console.log(document.head.nextSibling);
                console.log(document.head.nextElementSibling);
                console.log(document.head.previousSibling);
                console.log(document.head.previousElementSibling);
            </script>
        </div>

    </div>


    <div class="container">
        <div class="heading">
            BOM - Browser Object Model
        </div>

        <table border="1">
            <tr>
                <td>Document</td>
                <td>Contains contents and structure of document in tree format </td>
                <td>all the javascript methods, variables etc are globally member of window object, thus instead of window.document.getElementById(), we could use it without window. in start</td>
            </tr>
            <tr>
                <td>History</td>
                <td>Contains data about urls , example- users visited pages etc</td>
                <td>contains two methods - back() =>takes you to previous page, forward() =>takes you to next page</td>
            </tr>

            <script>
                // window.history.back()
                // window.history.forward()
            </script>
            <tr>
                <td>Location</td>
                <td>used to get the details of the current page and also can redirect to some other url on same page</td>
                <td></td>
            </tr>
            <tr>
                <td>Screen</td>
                <td>Holds the data about browser screen such as width and height</td>
                <td>can display screen width, height, availableWidth, availableHeight, colorDepth, pixelDepth</td>
            </tr>

            <script>
                console.log(screen.width)
                console.log(screen.availWidth)
                console.log(screen.height)
                console.log(screen.availHeight)
            </script>

            <tr>
                <td>Navigators</td>
                <td>contains the information about user browser</td>
                <td>window.location() </td>
            </tr>

            <script>
                console.log(window.location)
                console.log('you can call many methods and dat in window.location contains')
                console.log(window.location.href)
                console.log(window.location.hostname)
                console.log(window.location.pathname)

                console.log('you can also search for query and parameters in the url')
                console.log(window.location.search)
                console.log('you can always redirect page to some other page using window.location.assign("url")')
                // window.location.assign('google.com')

                // console.log(navigator.userAgent + "- it returns the user agent code, which you paste to third party website to confirm for various information")
                // console.log(navigator.onLine + " - it return true if user is online ")
            </script>

        </table>

        <div style="text-align:center">
            <h4> window also has some inbuilt-methods with it</h4>
        </div>

        <table border="1" style="margin:auto">
            <tr>
                <td>setTimeout()</td>
                <td>performs an action after expiration of specified time</td>
            </tr>
            <tr>
                <td>setInterval()</td>
                <td>performs action after defined interval of time</td>
            </tr>
            <tr>
                <td>alert()</td>
                <td>display alert boxes</td>
            </tr>



            <tr>
                <td>confirm()</td>
                <td>display confirm dialogue box containing ok or cancel button</td>
            </tr>

            <script>
                //    var confirm=  confirm('Are you 18+ ?')       
                //    if(confirm === true){
                //        console.log('welcome')
                //    }   else{
                //        console.log('sorry, but you are not allowed')
                //    }  
            </script>


            <tr>
                <td>prompt()</td>
                <td>display prompt dialogue box to be input is given by users </td>
            </tr>

            <!-- <script>
            var prompt = prompt('please enter your age')
            if(prompt >=18){
                console.log('welcome, sir')
            }else{
                console.log('but, you are not allowed')
            }
        </script> -->


            <tr>
                <td>open()</td>
                <td>open a url in new tab</td>
            </tr>

            <!-- <script>
                window.open('http://www.thetallyexpert.com')
            </script> -->

            <tr>
                <td>close()</td>
                <td>closes the current window or tab</td>
            </tr>


            <!-- <script>
            window.close()
        </script> -->
        </table>


    </div>

    <div class="container">
        <div class="heading">Selector, elements and references</div>
        <p>
            to get any html element we can use document.getElementById('id') or document.getElementsByClass('classname') or document.getElementsByTagName('p/div/etc') or document.getElementsByName or get document.querySelector('classname')
        </p>

        <br><br>

        <div class="main" id="main">
            <div class="d-inline-block first" id="first">
                First Element
            </div>

            <div class="d-inline-block second" id="second">
                Second Element
            </div>

            <div class="d-inline-block third" id="third">
                Third Element
            </div>



            <div class="text-center">
                <button id="changColorMain" class="changColorMain myClass">change Color of main</button>
                <button id="changColorChild" class="changColorChild myClass">change Color of child</button>
                <button id="changeColorBody" class="changeColorBody ">change Color of Body</button>
            </div>

            <p>
                please, open console to see the example
            </p>

            <script>
                document.getElementById('first').innerHTML = "Welcome to first Element";
                console.log("document.getElementById('idName') -> serach the id then we can perform operation on that slected html element")

                console.log("to manipulate the text of html tag, we can use .innerHTML='updated data' ");
                document.getElementsByClassName('myClass');
                console.log('document.getElementsByClassName("className") -> checks for all the class available but can not do operations on multiple html elements')

                document.getElementsByClassName('first');
                document.getElementsByTagName('div');
                console.log('document.getElementsByTagName("htmlTagName") -> checks for all the tags avaialble')

                console.log(
                    document.getElementsByName('myName')
                )

                console.log('document.getElementsByName("inputFormName") -> checks for names of form input')
                document.querySelector('.changeColorBody').innerHTML = "changed";
                console.log('document.querySelector("#id/.class") -> checks for first id or first class element found')
                document.querySelector('.changeColorBody').style.color = "green";
                // document.querySelectorAll('.myClass').style.color = "red";

                console.log('document.querySelectorAll("#id/.className") -> checks for all the id/class available but can not do operations on multiple html elements')

                let main = document.getElementById('main');
                let firstButton = document.getElementById('changColorMain');
                let thirdButton = document.getElementById('changeColorBody');

                
                firstButton.onclick = () => {
                    main.style.backgroundColor = "red";
                }
                thirdButton.addEventListener('click', () => {
                    document.body.style.backgroundColor = "rgb(" + Math.floor(Math.random() * 255) + "," + Math.floor(Math.random() * 255) + ","
                    +Math.floor(Math.random()*255)+")";
                });
            </script>
        </div>



    </div>





    <!-- <script src="dom.js"></script> -->
</body>

</html>