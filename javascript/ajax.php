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
        <div class="heading">
            AJAX - Asynchronus Javscript and XML
        </div>

        <p>
            AJX (asynchronous javascript and xml ) - allows web pages to be updated asynchronously by exchanging data with backend.
        </p>
        <p>
            Running code in the background is called Asynchronous execution
        </p>

        <p>
            AJAX uses a browser built-in XMLHttpRequest object to make requests to backend server.
        </p>

        <p>
            XMLHTTPRequest object gives us access to another property called readyState. readyState property holds the status of XMLHttpRequest
        </p>

        <table border='1' style="margin:auto">
            <tr>
                <td>UNSENT</td>
                <td>request has been initiated, but open() not called</td>
            </tr>
            <tr>
                <td>OPENED</td>
                <td>it means that open() has been called, represented by 1</td>
            </tr>
            <tr>
                <td>HEADING RECEIVED</td>
                <td>it means that send() has been called, represented by value 2</td>
            </tr>
            <tr>
                <td>LOADING</td>
                <td>it means that request is being processed, represented by value 3</td>
            </tr>
            <tr>
                <td>DONE</td>
                <td>it means that request is completed, and response is ready, represented by value 4</td>
            </tr>
        </table>


        <div class="heading">
            Ajax Response Codes
        </div>



        <table border="1" style="margin:auto">
            <tr>
                <td>200</td>
                <td>success - Get request was successful</td>
            </tr>
            <tr>
                <td>201</td>
                <td>success - Post request was successful</td>
            </tr>

            <tr>
                <td>400</td>
                <td>bad request - backend did not understand the request</td>
            </tr>
            <tr>
                <td>401</td>
                <td>unauthorized access</td>
            </tr>
            <tr>
                <td>404</td>
                <td>Not found</td>
            </tr>
            <tr>
                <td>500</td>
                <td>something, failed at backend and request cannot be completed</td>
            </tr>

        </table>

    </div>


    <div class="container" id="ajaxData">
        <div class="heading">
            Nepal Data
        </div>
    </div>



    <script>
        let httpRequest = new XMLHttpRequest();

        httpRequest.open("GET", "https://restcountries.eu/rest/v2/name/nepal");
        httpRequest.send();
        httpRequest.addEventListener('load', function() {
            var [data] = JSON.parse(this.responseText)
            console.log(data)
            const htmlData = `
            <div class="card col-md-6 m-auto p-0 myShadow">
                <div class = "card-body text-center">
                        <img src="${data.flag}" class="img-fluid card-img" style="width:200px;height:200px;">
                        <h1 class="display-3">
                            ${data.name}
                        </h1>
                        <p class="lead">${data.capital}</p>
                </div>  
                <div class="card-footer">
                    <div class="row">
                        <div class="col-md-4">
                            <h3>${data.nativeName}</h3>
                            <p class="lead">Native Language</p>
                        </div>
                        <div class="col-md-4">
                            <h3>${data.population}</h3>
                            <p class="lead">Population</p>
                        </div>

                        <div class="col-md-4">
                            <h3>${data.demonym}</h3>
                            <p class="lead">Demonym</p>
                        </div>
                    </div>
                </div>
            </div>
        `;


            let myContainer = document.getElementById('ajaxData');
            myContainer.insertAdjacentHTML("afterbegin", htmlData);

        })
    </script>


    <script>
        // console.clear();
        console.log('my Ajax Practice');

        let hRequest = new XMLHttpRequest();
        hRequest.onreadystatechange = function() {
            if (this.readyState == 4) {
                if (this.status == 200) {
                    const data = JSON.parse(this.responseText)
                    console.log(data);
                }
            }
        }


        hRequest.open('GET', "https://jsonplaceholder.typicode.com/posts", true)
        hRequest.send();
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>