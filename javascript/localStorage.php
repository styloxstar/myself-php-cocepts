<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LocalStorage in Javscript</title>
    <link rel="stylesheet" href="localStorage.css">
</head>

<body>

    <div class="container">
        <div class="heading">
            LocalStorage - Persistant Dta Storage within browser
        </div>

        <p>
            The localStorage and sessionstorage properties allow to save key/value pair in a web browser. The localStorage object stores data with no expiration date. The data will not be deleted when browser is closed and will be availble the next day, week or year
        </p>

        <p>
            localStorage.setItem(key,value):- since it only accepts strings as datatype, and we have our data in array, we'll use JSON.stringify() to convert into string
        </p>


        <button id="getLocalStorage">
            get Local Storage Data
        </button>

        <div id="showLocalStorage">

        </div>


        <script>
            let friends = ['deepak', 'gautam', 'dpk', 'devil', 'aman', 'deep', 'stylox', 'ram'];

            localStorage.setItem("mFriends", JSON.stringify(friends));


            let getLocalData = document.getElementById("getLocalStorage");


            // alert('abcsss')

            getLocalData.addEventListener("click", (event) => {
                // alert(event);
                let fetchData = JSON.parse(localStorage.getItem("mFriends"));
                alert(fetchData);
            });
        </script>


    </div>

</body>

</html>