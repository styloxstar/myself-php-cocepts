<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Javascript - AJAX</title>
    <link rel="stylesheet" href="ajax.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="card text-center mx-auto p-3 w-50 myShadow" style="margin-top:200px;">
            <div class="card-body">
                <h3>😁 Best Jokes to make your day ... 😆</h3>
                <div class="joke my-3 " id="joke">Awesome joke is loading ...</div>
                <button class="btn btn-info" id="jokeBtn">Next Joke</button>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="heading">
            Promices, fetch api, Async and await
        </div>

        <div class="heading">
            Promices
        </div>
        <p>
            to prevent us from call back hell, promises are used, it basically return two options either it will return the data i.e. promice fullfilled or reject the data
        </p>

        <p>
            we'll use fetch() method instead of XMLHttpRequest, which also has fetching method _ get/post etc and url
        </p>

        <script>
            console.log("using promises")

            var jokes = document.querySelector("#joke")
            var jokeBtn = document.querySelector('#jokeBtn')

            // const generateJokes = () => {

            //     let setHeader = {
            //         headers: {
            //             Accept: "application/json"
            //         }
            //     }

            //     fetch("https://icanhazdadjoke.com", setHeader).then((res) => {
            //         //fetch api returns the data in html format, thus it need to be converted into json format
            //         //         // console.log(res.json());
            //         //         // if we are using curly braces inside fat arrow function, hen it is very important to return the data, so that it should be accessible to next then()

            //         return res.json()
            //     }).then((data) => {
            //         console.log(data.joke)
            //         jokes.innerHTML = data.joke;
            //     }).catch((error) => {
            //         console.log(error);
            //     });

            // }

            // jokeBtn.addEventListener('click', generateJokes)
            // generateJokes()
        </script>


        <div class="container">
            <div class="heading">
                Async...Await
            </div>

            <p>
                using async_await:- async.. await is used to reduce the complexity of promises, though it also returns promises
            </p>

            <p>
                to convert function to async function, use 'async' just before fat arrow function or any function()
            </p>

            <p>
                async simply fetch the data while await is used to wait until the data is fetched and handle errors using try and catch
            </p>


        </div>


        <script>
            console.clear();

            // var jokes = document.querySelector("#joke")
            // var jokeBtn = document.querySelector('#jokeBtn')

            // let generateJokes = async () => {
            //     let setHeader = {
            //         headers: {
            //             Accept: 'application/json',
            //         }
            //     }

            //     try {
            //         let myPromice = await fetch('https://icanhazdadjoke.com', setHeader);
            //         let myData = await myPromice.json();

            //         console.log(myData.joke);
            //         jokes.innerHTML = myData.joke;

            //     } catch (err) {
            //         console.log(`the error is: ${err} `);
            //     }

            // }


            // jokeBtn.addEventListener('click', generateJokes)
            // generateJokes()
        </script>


        <script>
            console.clear();
            console.log('my practice')

            let generatePost = async () => {

                let setHead = {
                    headers: {
                        Accept: 'application:json'
                    }
                }


                try {

                    let meraPromice = await fetch("https://jsonplaceholder.typicode.com/posts", setHead);

                    // console.log(meraPromice);
                    let meraData = await meraPromice.json();
                    console.log(meraData);

                } catch (err) {
                    console.log(`the error is ${err}`)
                }

            }

            generatePost()
        </script>







        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    </div>

</body>

</html>