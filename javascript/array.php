<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Javascript - Array</title>
    <link rel="stylesheet" href="array.css">
</head>

<body>

    <div class="container">
        <div class="heading">
            For Loops Variant
        </div>

        <table border="1" width="100%">
            <tr>
                <th>for ... in</th>
                <th>for ... of</th>
                <th>forEach</th>
            </tr>

            <tr>
                <td>Returns Index</td>
                <td>Returns Elements Data</td>
                <td>
                    Returns Everything using Callback function
                </td>
            </tr>

            <tr>
                <td colspan="3" style="text-align:center"></td>
            </tr>

        </table>
        <script>
            let friends = ['aman', 'dpk', 'devil', 'abhijit', 'ram', 'harish', 'dpk', 'vikas', 'dpk', 'jitendra'];



            for (friend in friends) {
                console.log(friend);
            }


            for (friend of friends) {
                console.log(friend);
            }


            friends.forEach((element, index, array) => {

                console.log(`elements: ${element}, index: ${index}, array: ${array}`);
            })
        </script>

    </div>


    <div class="container">
        <div class="heading">Searching Methods</div>

        <table border="1" width="100%">
            <tr>
                <th>indexOf()</th>
                <th>includes()</th>
                <th>find()</th>
            </tr>

            <tr>
                <td>indexOf('data to serach')=>returns index of first occurance of element found, lastIndexOf('data to search')=>returns index of last occurance of element found,<br> returns <strong>-1</strong> if match not found</td>
                <td>
                    includes(data to search) returns <strong>true</strong> if match found, <strong>false</strong> if match not found
                </td>
                <td>
                    find('data to search')=> return value of first occurance of match found, findIndex('data to search')=> returns index of match found, it uses callback function to find match and return <strong>-1</strong>, if match not found
                </td>
            </tr>

            <script>
                console.log(friends.indexOf('dpk'));
                console.log(friends.indexOf('deepak'));
                console.log(friends.lastIndexOf('dpk'));
                console.log(friends.lastIndexOf('deepak'));
                console.log(friends.includes('dpk'));
                console.log(friends.includes('deepak'));
                let findName = friends.find((item) => {
                    // console.log(item == 'dpk');
                    return item == 'dpk';
                })
                console.log(findName);
                let findName1 = friends.findIndex((item) => {
                    // console.log(item == 'dpk');

                    return item == 'deepak';
                })

                console.log(findName1);
            </script>




        </table>


        <div class="heading">
            Sorting
        </div>

        <p>Please, open console to see below example results</p>

        <script>
            let month = ['may', 'march', 'december', 'sepetember', 'january', 'february'];
            console.log(month.sort())

            console.log('array.sort() will check for alphabets, ten in case first alphabet is same it will check for second alphabet and so on')


            let day = [7, 2, 8, 1, 9, 52, 76, 22, 17];
            console.log(day.sort())

            console.log("as we can see, array.sort() is not able to sort numbers properly as well, because it first converts numbers into the string, then sorts then in alphabetical way mentioned above, so its little buggy")
        </script>

    </div>


    <div class="container">
        <div class="heading">
            CRUD Operation in Array
        </div>

        <table border="1" width="100%">
            <tr>
                <th>push()</th>
                <th>pop()</th>
                <th>unshift()</th>
                <th>shift()</th>
            </tr>

            <tr>
                <td>push() => adds one or more data at end of the array</td>
                <td>pop()=> removes one data from array</td>
                <td>unshift()=> adds one or more data at start of array</td>
                <td>shift()=> removes one data from start of array</td>
            </tr>

            <script>
                console.log("push() add the element in the end of array, whereas pop() deletes the element from end of arary")


                let animals = ['chicken', 'goat', 'pork', 'beef'];
                console.log(animals);

                animals.push('lamb');
                console.log(animals);

                console.log('we can also add multiple values at once');

                animals.push('rabbit', 'piegon', 'peocock');
                console.log(animals);


                animals.pop();
                console.log(animals);


                console.log("unshift() add the element in the start of array, whereas shift() deletes the element from start of array")

                let veggie = ['cauliflower', 'cabbage', 'tomato', 'onion'];
                console.log(veggie)

                veggie.unshift('raddish');
                console.log(veggie)

                veggie.unshift('carrot', 'brinjal', 'potato');
                console.log(veggie)

                veggie.shift();
                console.log(veggie)

                console.log('to add or remove elemts from middle or in bewtween from array using splice()')
            </script>

        </table>


    </div>


    <div class="container">
        <div class="heading">
            Filtering - map(), reduce() and filter()
        </div>


        <table border="1" width="100%">
            <tr>
                <td>map()</td>
                <td>reduce()</td>
                <td>filter()
                </td>
            </tr>

            <tr>
                <td>it iterates the array for us and we can pass a callback function to perform some operation on each array item. the updated values can be returned by the callback function to create new array</td>
                <td>it also iterates through entire array and it accepts a call back function, difference between map() and reduce() that, reduce() passes the result of callback function from one iteration to another iteration. this callback result is called accumulator. the accumulator can be number, string, etc and must be initiated and passed when calling reduce(). thus in another we have to combine item and accumulator</td>
                <td>
                    it iterates through the array to create new array. You can decide which elements should be added in new based on condition. if condition return true, then it will add add the current item to array, if false then it will skip the item to be added in array.

                </td>
            </tr>


            <script>

                let num = [1,21,23,7,21,4,81,73,7,92,9,81];


                let mapp = num.map((item)=>{
                
                    return item*2;

                    // console.log(item*2);


                    console.log('when passed condition in map(), it prints the boolean value')

                    // return item%2==0;
                    // console.log(item%2==0);
                })

                console.log(mapp);
                // mapp();



                console.log('reduce function returns single value resulting of entire operation, it is mostly used to reduce teh array and getting the result out of it')

                let reduce = num.reduce((acc,item)=>{
                    return acc+item
                },0)


                 console.log(reduce)


                 console.log("when condition passed, filter() checks and filter that data according to condition, and returns the data")


                 let filter = num.filter((item)=>{

                    // console.log(item%2==0);
                    return item%2==0;
                 })

                 console.log(filter);



                 // combinations

                 let combination = num.filter((item)=>{
                    return item%2==0;  //first filters the data
                 }).reduce((acc,item)=>{
                 
                    return acc+item;  // then it adds give the sum of filtered data
                 })


                 console.log(combination)




            
            
            
            
            </script>

        </table>

    </div>

    <!-- <script src="array.js"></script> -->
</body>

</html>