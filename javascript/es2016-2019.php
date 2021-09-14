<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcmaScript 2016-2019 </title>
    <link rel="stylesheet" href="es2016-2019.css">
</head>

<body>
    <div class="container">
        <div class="heading">
            ECMASCRIPT 2016-2019
        </div>


        <table width="100%" border="1">
            <tr>
                <th>ES7 - 2016</th>
                <td>
                    <p>array.includes() which we had seen in array section already, it returns boolean value depending upon the match found</p>
                    <p>
                        introduction of ** operator, example 3**3 = 27
                    </p>

                    <script>
                        let names = ['dpk', 'devil', 'deepak', 'gautam', 'stylox', 'deep'];
                        console.log(names.includes('deepak'))

                        console.log(3 ** 3);
                    </script>
                </td>
            </tr>

            <tr>
                <th>ES8 - 2017</th>
                <td>
                    <p>it introduces string padding, Object.values(), Object.entries() and most importantly async function </p>
                    <p>
                        String padding:- pads the string with whitespaces with padStart(4) and with padEnd(10)
                    </p>

                    <script>
                        let myName2 = 'deep'.padStart(5).padEnd(7)
                        console.log(myName2)
                        console.log('padStart(5) will add 5 blank spaces in start where padEnd(10) will add 10 whitespace in the end of string')
                    </script>

                    <p>
                        Object.values - returns an array containing all the object/array own property value
                    </p>

                    <script>
                        const person = {
                            name: 'deepak',
                            age: 28
                        }
                        console.log(Object.values(person));
                        console.log("it also workd with array values as well");

                        const myFriends = ['aman', 'ram', 'abhijit']
                        console.log(Object.values(myFriends));
                    </script>

                    <p>
                        Object.entries() - returns an arary containing all object own properties as an array of [key,value] pair
                    </p>

                    <script>
                        console.log(Object.entries(person))
                        console.log(Object.entries(myFriends))
                    </script>
                </td>
            </tr>

            <tr>
                <th>
                    ES9-2018
                </th>
                <td>
                    <p>
                        it introduces :- Rest/Spread Properties, Asynchronous iteration, Promice.prototype.fianally, Regular Expression improvements
                    </p>
                    <p>
                        with Ecmascript 2018 now REST/ SPREAD operators works with objects as well
                    </p>

                    <script>
                        console.log("Rest operator with objects")
                        let {
                            first,
                            second,
                            ...others
                        } = {
                            first: 1,
                            second: 2,
                            third: 3,
                            fourth: 4
                        }
                        console.log("in above, ...others can have multiple object properties")

                        console.log(others);
                        console.log("Spread operator with objects")
                        let mObjects = {
                            first,
                            second,
                            ...others
                        }
                        console.log("in above, mObjects has the copy of above varible containing data");
                        console.log(mObjects)
                    </script>
                </td>
            </tr>

            <tr>
                <th> ES10 - 2019</th>
                <td>
                    <p>it introduces:- Array.prototype.{flat,flatMap}, Optional catch binding, Object.fromEntries, String.prototype.{trimStart, trimEnd}, Symbol.prototype.description, JSON improvements, Well-formed JSON.stringify(), Function.prototype.toString()</p>
                    <p>
                        Flatten Array using flat(no. of levels)
                    </p>

                    <script>
                        let myArray = [
                            ['name1', 'name2'], 'name3', 'name4', 'name5', [
                                ['name6'],
                                [
                                    ['name7'],
                                    ['name8']
                                ]
                            ], 'name9'
                        ];

                        console.log(myArray);
                        console.log("normally if we run above code, then it will produce data in multi-dimentinal array i.e. it will flat array only at one level, thus we use array.flat(no of levels), no of levels indicate on what level we want to flat the array")

                        console.log(myArray.flat(2));
                        console.log(myArray.flat(3));
                        console.log(myArray.flat(4));
                        console.log(myArray.flat(Infinity));
                        console.log("array.flat(Infinity) - will flat the array upto the last level no matter how much arrays are presnt inside")
                    </script>

                    <p>
                        Object.fromEntries() -> when Object.entries() used it returns the data in array format, to convert array back to the object we use Object.fromEntries

                        <script>
                            const myPerson = {
                                name: 'deepak',
                                age: 28
                            }
                            console.log(Object.entries(myPerson));
                            let pPerson = Object.entries(myPerson);
                            console.log(Object.fromEntries(pPerson));
                        </script>
                    </p>

                </td>
            </tr>

            <tr>
                <th>ES11 - 2020</th>
                <td>
                    <p>
                        it introduces - BigInt, Dynamic Import etc"
                    </p>

                    <script>
                        console.log("BigInt - ");

                        let oldNum = Number.MAX_SAFE_INTEGER;
                        console.log(oldNum)
                        console.log(oldNum + 9);
                        console.log("when we perform any arithmetic operation on very big integer numbers, it produces incorrect result, thus we can make use of BigInt using putting 'n' in the end of veru big integer");

                        console.log(9007199254740991n + 8n)

                        console.log("Dynamic Import - will see that later")
                        console.log("Nullish Coalescing - adds the ability to trully check nullish values instead of returning falsy(0, undefined, null, false, NaN etc) other than truthy using ??");

                        let myValue = null
                        // console.log(myValue ?? "oops");
                        console.log("to see the result, run in browser console");
                    </script>
                </td>
            </tr>


            <tr>
                <th>ES 2014</th>
                <td>
                    <p>use strict for debugging</p>
                </td>
                <script>
                    x = 3.14;
                    console.log(x)

                    console.log("use strict: checks if all the data type defined or checks for any error");

                    "use strict";
                    my = 2.5;
                    console.log(my)

                    console.log("to see the use strict result, run in browser console")
                </script>

            </tr>

        </table>




    </div>



    <script>
        // console.clear();
        console.log('myPractice');

        console.log(4 ** 3);

        let meraName = 'deepak'.padStart(15).padEnd(20);
        console.log(meraName);


        let meraObj = {
            name: 'deepak',
            job: 'web developer',
            frontend: 'angular',
        }


        console.log(Object.values(meraObj));
        console.log(Object.entries(meraObj));

        // let {
        //     first,
        //     second,
        //     ...others
        // } = {
        //     first: 1,
        //     second: 2,
        //     third: 3,
        //     fourth: 4
        // }
        // console.log("in above, ...others can have multiple object properties")

        // console.log(others);
        // console.log("Spread operator with objects")
        // let mObjects = {
        //     first,
        //     second,
        //     ...others
        // }
        // console.log("in above, mObjects has the copy of above varible containing data");
        // console.log(mObjects)


        let {
            red,
            blue,
            ...green
        } = {
          red:1,
          blue:1,
          teal:3,
          marine:4
        }
        console.log(green);


        let mColor  = {
            black:4,
            white:5,
            ...green
        }

        console.log(mColor);


        let entries = Object.entries(mColor);
        console.log(entries);
        console.log(Object.fromEntries(entries));
    </script>





</body>

</html>