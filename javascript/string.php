<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Javascript String</title>
    <link rel="stylesheet" href="string.css">
</head>

<body>

    <div class="container">
        <div class="heading">Strings in Javascript</div>
        <p>please, open the console to see below result</p>
        <br>
        <p>varName.length() is used to get the length of string</p>
        <br>
        <p>searching:- indexOf(data to search),lastIndexOf(data to search), search(data to search) methods are used , it returns index of matched data, if not matched it will return <strong>-1</strong> </p>

        <br>

        <p>extracting:- slice()=>slice/delete the specified data,substring():- get part of string from defined string, substr()


            <script>
                let intro = "hello my name is deepak, and my job name is web development and \it's\ awesome";

                // finding length of string
                console.log(intro.length)
                // escape character
                // when the string has single quote or double quote then it might create problem while printing, thus we can avoid this issue with escape charceter \''\
                console.log(intro);

                // finding string in string
                console.log("index methods")
                console.log(intro.indexOf('name'))
                console.log(intro.indexOf('php'))
                console.log(intro.indexOf('name', 10))
                console.log(intro.lastIndexOf('name'))
                console.log(intro.lastIndexOf('php'))

                // searching for string in another string
                console.log("search methdos")
                console.log(intro.search('name'))
                console.log(intro.search('php'))



                //slice method

                console.log('slice methods')
                let fruit = 'apple, banana, mango, orange';

                console.log("the slice() method selects the elements starting at the given start argument, and ends at, but does not include, the given end argument, priginal array or string will not be chnaged")


                console.log("==============================================================")
                console.log(fruit.slice(7, 12))
                console.log('slice the data from index 7 to 12')
                console.log(fruit.slice(7))
                console.log('slice the data from 7 and will be processed till end')
                console.log(fruit.slice(7, -2))
                console.log('slice will happen till end and since negative added then it will slice from backword -2')
                console.log(fruit.slice(7, 2))
                console.log('if end value is less than start value, then it will not return anything')

                console.log("==============================================================")

                console.log('substring cannot accept negative values, if we add negative end then it will extract the data from start till the start value is defined')
                console.log(fruit.substring(7, 11))
                console.log(fruit.substring(7, -2))

                console.log(fruit.substring(7, 2))
                console.log('if end value is less than start value, then it will skip that end value from start, and will return after word string till start value')

                console.log("==============================================================")
                console.log('difference is that the second parameter specifies the length of extracted part, it also accepts negative values to produce backword extraction')

                console.log(fruit.substr(7, 2))
                console.log(fruit.substr(-2))

                console.log("==============================================================")
                console.log("Replacing string Content ");
                console.log("==============================================================")

                console.log("replace() method replaces a specified value with another value in a string")

                let intro2 = "my name is deepak, and i am programmer, programmer is intelligent";
                console.log(intro2.replace('deepak', 'devil'))

                console.log("replace() does not change the string, it will return new string, and only replaces only first match() and also cas-sensittive")

                console.log(intro2.replace('programmer', 'developer'))

                console.log("==============================================================")
                console.log("Extracting string charcaters");
                console.log("==============================================================")

                // there are three methods for extracting string charcaters:- 
                // charAt(position)
                // charCodeAt(position)
                // Property acccess[]


                console.log("==============================================================")
                console.log("charAt() method returns charcater at a specified index(position) in a string")

                let myProgram = "html is used for structure";
                console.log(myProgram.charAt(2))

                console.log("charCodeAt() method returns the unicode of charcater at a specified index(position) in a string")
                console.log(myProgram.charCodeAt(2))

                console.log("the charCode() returns utf-16 code(an integer between 0 and 65535)")
                console.log("the unicode standard provides a unique number for every character, no matter the platform, device, application, or language. UTF-8 is a popular unicode encoding which has 88-bit code units")


                console.log("==============================================================")
                console.log("useful function")
                console.log("==============================================================")

                var firstName = "Deepak";
                var lastName = "GAUTAM";

                console.log("str.toUpperCase() used to convert string in uppercase and for lowsercase str.toLoweeCase() used")

                console.log(firstName.toUpperCase())
                console.log(lastName.toLowerCase())

                console.log("concat() is used to jaoin two strings")
                console.log(firstName.concat(lastName))

                console.log(firstName.concat(" ", lastName));

                console.log("trim() is used to remove whitespae in string from both sides")

                let trimmer = "     my name is what           ";
                console.log(trimmer.trim())

                console.log("converting string into array using split()")

                let text = "a,b,c|d";
                console.log("splitting using ,")
                console.log(text.split(","))
                console.log("splitting using |")
                console.log(text.split("|"))


                // console.clear();
                console.log("==============MyPractice===========-=========")

                //searching

                let myData = "i love php, but it does not suppoerts user input, but php is simple,powerful and scalable scripting language ";

                console.log("======== indexOf ============")
                console.log(myData.indexOf('php'));
                console.log(myData.indexOf('php', 10));
                console.log(myData.lastIndexOf('php'));
                console.log(myData.indexOf('php', -2));
                console.log(myData.lastIndexOf('php', -2));
                console.log(myData.indexOf('php', -2));

                console.log("=========search=========")

                console.log(myData.search('php'));
                console.log(myData.search('php', -2));
                console.log(myData.search('html'));


                console.log("========= slice ============")
                let animal = "dog,cat,mouse,horse,buffalo,cow,shark";
                console.log(animal.slice(3, 7));
                console.log(animal.slice(3));
                console.log(animal.slice(3, -2));
                console.log(animal.slice(3, 1));


                console.log("========= substring ============")

                console.log(animal.substring(3, 7));
                console.log(animal.substring(3));
                console.log(animal.substring(3, -2));
                console.log(animal.substring(3, 1));

                console.log("========= substr ============")

                console.log(animal.substr(3, 7));
                console.log(animal.substr(3));
                console.log(animal.substr(3, -4));
                console.log(animal.substr(3, 4));


                console.log("========= Replace ============")
                console.log(animal.replace('dog', 'fox'));

                console.log("========= char and position ============")
                console.log(myData.charAt(20));
                console.log(myData.charCodeAt(20));

                console.log("========= useful function ============")

                let r = "       Hello there, how are You, how is your life        ";

                console.log(r.toUpperCase());
                console.log(r.toLowerCase());

                let mm = "hello,there,and|pal";
                console.log(r.trim());
                console.log(mm.split(','))
            </script>
    </div>



<!-- 
    <script src="string.js"></script> -->
</body>

</html>