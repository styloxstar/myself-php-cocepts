<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Json</title>
</head>
<body>
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
    
</body>
</html>