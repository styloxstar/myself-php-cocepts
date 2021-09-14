<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Javascript-DateTime</title>
    <link rel="stylesheet" href="dateTime.css">
</head>

<body>


    <div class="container">
        <div class="heading">Date Objects - 4 methods</div>
        <table border="1" width="100%">
            <tr>
                <th>new Date()</th>
                <th>new Date(year, month, day, hours, minutes, seconds, milliseconds)</th>
                <th>new Date(milliseconds)</th>
                <th> we can not avoid month section => new Date(date string)</th>
                <th>Date.now():- returns the numeric value corresponding to the current time - the number of milliseconds elapsed since january 1,1970 00:00:00 UTC </th>
            </tr>

            <tr>
                <td colspan="5" style="text-align:center">Pleas open cosole to see results</td>
            </tr>


        </table>


        <script>
            let currDate = new Date();
            console.log(currDate)
            console.log("new Date() returns date and time with standard timezone")

            console.log(currDate.toLocaleString())
            console.log("toLoacalString() returns local date and time")

            console.log(currDate.toString())
            console.log("toString() returns local date and time with timezone")

            console.log("=========================================================")
            console.log("Date.now() -> returns the numeric value corresponding to the current time - the number of milliseconds elapsed since january 1,1970 00:00:00 UTC")
            console.log("=========================================================")

            console.log(Date.now())

            console.log("new Date(year, month.......) having 7 arguments year, month, day, hours, minutes, second, millisecond")

            console.log("javascript counts months from 0 to 11, january=>0, december=>11");

            var d = new Date(2019, 11, 5, 6, 12, 22, 11);
            console.log(d.toLocaleString())

            console.log("we can use fewer arguments as per your need, bt still it will provide time, and we are providing arguments then it is very important to add month argument")

            var withoutMonth = new Date(2020);
            console.log(withoutMonth.toLocaleString())

            var withMonth = new Date(2020, 10)
            console.log(withMonth.toLocaleString())

            console.log("we can also create new Date(dateString) => creates new date from date string")

            var dd = new Date("October 2, 2020 12:19:12");
            console.log(dd.toLocaleString())

            console.log("new Date(millisoconds)=> cretaes a new date objects as zero time plus milliseconds")


            let millizero = new Date(0)
            let milliCustom = new Date(100000000000);

            console.log(" 86400000 represents 1 day time in millisconds i.e. 24 hours ")
            let myMilli = new Date(86400000 * 2)

            console.log(millizero.toLocaleString())
            console.log(milliCustom.toLocaleString())
            console.log(myMilli.toLocaleString());

            console.log("============= myPractice ============")

            let myDate = new Date();
            console.log(myDate)
            console.log(myDate.toLocaleString())
            console.log(myDate.toLocaleDateString())
            console.log(myDate.toLocaleTimeString())


            console.log(Date.now())
            console.log(new Date(2020))
            console.log(new Date(2020, 8))
            console.log(new Date(2020, 8, 12))
            console.log(new Date(2020, 8, 12).toLocaleString())

            //get and set date

            let nextDate = new Date(2019, 8, 5, 8, 8, 7,2);
            console.log(nextDate.getDate());
            console.log(nextDate.getDay());
            console.log(nextDate.getFullYear());
            console.log(nextDate.getMonth());
            console.log(nextDate.getMinutes());
            console.log(nextDate.getSeconds());


            let setDate = new Date();
            console.log(setDate.setDate(11));
            //  console.log(setDate.setDay(12));
            console.log(setDate.setFullYear(2010));
            console.log(setDate.setMonth(9));
            
            console.log(setDate.setMinutes(12));
            console.log(setDate.setSeconds(12));

            console.log(setDate.toLocaleString())
        </script>

    </div>


    <!-- <script src="dateTime.js"></script> -->
</body>

</html>