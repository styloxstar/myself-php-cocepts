<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Javscript Regex</title>
    <link rel="stylesheet" href="regex.css">
</head>

<body>

    <div class="container">
        <div class="heading">
            Javscript Regex
        </div>
        <div style="text-align: center">
            <h4>Regular Expression is an object that describes the pattern of characters. used to check for validation like email, custom validation etc.</h4>

            <h5>please note:- Regular expression are Case-sensitive</h5>

            <table border="1">
                <tr>
                    <th>symbol or characters</th>
                    <th>definition or uses</th>
                    <th>example</th>
                </tr>

                <tr>
                    <td>
                        / /
                    </td>
                    <td>
                        any expression is defined by / expression /
                    </td>
                    <td> / any expression / </td>
                </tr>


                <tr>
                    <td>
                        []
                    </td>
                    <td>
                        range - defines the range we should check for validation
                    </td>
                    <td>
                        / [A-Z][a-z][0-9] or [a-zA-Z0-9] /
                    </td>

                </tr>


                <tr>
                    <td> character set like [\d]</td>
                    <td>

                    </td>
                    <td>
                        ^ = other than numbers
                        <br>
                        \w - selecting other than alphabets and numbers but not spaces and special characters => use: [\w]
                        <br>

                        \W- negation of w
                        <br>
                        \s - selects spaces
                        <br>
                        \S - negation of s
                        <br>
                        \d - selects only numbers
                        \<br>
                        \D - negation of d
                    </td>
                </tr>
            </table>
            <br>
            <hr>
            <br>
            <h4> Quantifiers:- select a value multiple times. they also decides how many time a value should be selected , sytax:- {value}, eg:- [\d]{3}</h4>

            <table border="1">
                <tr>
                    <th>quantifiers syntax - example</th>
                    <th>definition</th>
                </tr>

                <tr>
                    <td>
                        [\d]{3}
                    </td>

                    <td>
                        it will search for numbers in three digits like 392, 221, but it will not select 22, since it has only to digits
                    </td>
                </tr>

                <tr>
                    <td>
                        [\d]{3-6}
                    </td>

                    <td>
                        it will search for numbers in between three to six digits like 392,22222,111111 221, but it will not select 22, since it has only to digits
                    </td>
                </tr>


                <tr>
                    <td>
                        [\d]{1,}
                        <br>
                        also there is alternative to this [\d]+, + ensures all the numbers within the onditions are met
                    </td>

                    <td>
                        it will search for numbers equal or more than three to six digits like 392,22222,111111,29837803733333333, 221
                    </td>
                </tr>


                <tr>
                    <td>

                        / ^[\d]{4}$ / :- $ used to end the expression , so if only condition matched then it will select the specified data
                    </td>

                    <td>
                        it will search for 4 digit no:- 2222, without $ it could also select 227272727, but using $, it makes sure that only number with 4 digits get selected
                    </td>
                </tr>

                <tr>
                    <td>
                        /^[a-zA-Z]{5}[0-9]{4}[a-zA-Z]$/
                    </td>

                    <td>
                        Pan Card number Expression - starting with 5 alphabets , followed by 4 numbers, and ending with 1 alpha bet
                    </td>
                </tr>


                <tr>
                    <td>

                        / https{0,1} / or https?
                    </td>

                    <td>
                        making sure both http and https gets selected, ? indicates it as optional
                    </td>
                </tr>




            </table>



            <hr>


            <div style="text-align:center">
                <h4> to define regex in javascript there are two ways :- <br>
                    1. syntax:- /{pattarn}/ {flags}
                    <br>
                    2. using regex class , syntax :- new RegExp("pattern, flags")
                </h4>


                <h4> Regex method </h4>

                <table border="1" style="text-align:center">
                    <tr>
                        <td>str.search(pattern)</td>
                        <td>It returns the string position of first match </td>
                    </tr>
                    <tr>
                        <td>pattern.test(str)</td>
                        <td>returns true if there is match and false if there is no match</td>
                    </tr>
                    <tr>
                        <td>str.match(pattern)</td>
                        <td>it returns the matched string. if not set to global returns only first match , if set to global, return array of match </td>
                    </tr>


                    <script>
                        var str = "this is black pen. this pen is really good"
                        var pattern = /pen/
                        console.log('you could also add flags like global -g, or case insensitive -i, but to do that you have enclosed your pattern in new RegExp()')
                        var patterns = new RegExp('pen', 'gi')


                        console.log(str.search(patterns))
                        console.log('if above method will find your pattern then it will return the position, otherwise it will return -1')
                        console.log('if you want to check, if pattern is present or not, you can also check using pattern.test("search data")')
                        console.log(str.match(patterns))
                    </script>
                </table>

            </div>


            <hr>
            <div style="text-align:center">
                <h4> Regex Group - there may be chance that we are validating many things in one string, in that case regex groups are useful</h4>

                <script>
                    console.log('suppose we have to validate the mobile number o=for 10 digits which may also have 91 or +91 as prefix')
                    var str = "9082272575"
                    var patt = /^(\+91)?[\d]{10}$/g

                    console.log(str.match(patt))

                    console.log('thus, in above example, we grouped +91 as another entity to make it optional, and used \ to + to make it as escape character')


                    var uStr = 'www.google.com'
                    var uPatt = /^www\.[\w]+\.(com|co|org|net|in)$/g


                    console.log(uStr.match(uPatt));
                    console.log('in above example as well, we have created new group of com, net etc together with |, and used \ in front of . , to make it escape character')
                </script>


            </div>

            <br>
            <hr><br>


        </div>


        <div class="container">

            <div class="heading">Fill This Form</div>


            <form action="" method="post">

                <div id="nameGroup control">
                    <div class="d-inline">
                        <input type="text" name="rName" id="rName" placeholder="Enter Name">
                    </div>

                    <div id="nError" style="color:red">

                    </div>
                </div>


                <div id="mobileGroup control">
                    <div class="d-inline">
                        <input type="number" name="rMobile" id="rMobile" placeholder="Enter Mobile">
                    </div>

                    <div id="mError" style="color:red">

                    </div>
                </div>

                <div id="nameGroup control">

                    <input type="submit" id="save" value="Submit">

                </div>



                <script>
                    var rName = document.getElementById('rName');
                    var rMobile = document.getElementById('rMobile');
                    var nameError = document.getElementById('nError');
                    var mobileError = document.getElementById('mError');



                    rName.addEventListener('blur', (e) => {

                        // alert('abc');

                        let pattern = /^[A-Za-z\s]{2,}$/
                        let currValue = rName.value
                        // alert(currValue);
                        let valid = pattern.test(currValue);
                        // alert(valid);

                        if (!valid) {
                            nameError.innerHTML = "only alphabets are allowed wit minimum 2 charcters";

                        } else {
                            nameError.innerHTML = "";
                        }
                    });


                    rMobile.addEventListener('blur', (e) => {

                        // alert('abc');

                        let pattern = /^[6-9][0-9]{9}$/
                        let currValue = rMobile.value
                        // alert(currValue);
                        let valid = pattern.test(currValue);
                        alert(valid);

                        if (!valid) {
                            mobileError.innerHTML = "only 10 digits are allowed";

                        } else {
                            mobileError.innerHTML = "";
                        }
                    });
                </script>



            </form>


        </div>



    </div>

</body>

</html>