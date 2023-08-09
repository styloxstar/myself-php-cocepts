<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Village" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"> -->
    <link rel="stylesheet" href="style.css">
    <title>Deepak</title>
</head>

<body>



    <div style="margin-top:5em">

        <form action="" class="myForm">
            <fieldset style="text-align:left">
                <legend>MyForm</legend>

                <input type="text" class="mControl" name="name" id="name" placeholder="Enter Name Here!!!">
                <input type="email" class="mControl" name="email" id="email" placeholder="Enter Email Here!!!">
                <input type="password" class="mControl" name="password" id="password" placeholder="Enter Password Here!!!">
                <textarea name="address" class="mControl" id="address" cols="30" rows="5" placeholder="Enter address here"></textarea>

                <select name="program" id="program" class="mControl" style="width:98%">

                    <optgroup label="frontend">
                        <option value="Angular">Angular</option>
                        <option value="Javascript">Javascript</option>
                        <option value="React">React</option>
                        <option value="Bootstrap">Bootstrap</option>
                        <option value="CSS">CSS</option>

                    </optgroup>
                    <optgroup label="backend">
                        <option value="PHP">PHP</option>
                        <option value="Python">Python</option>
                        <option value="Node.js">Node.js</option>
                        <option value="Express.js">Express.js</option>
                        <option value="Laravel">Laravel</option>
                    </optgroup>

                </select>


                <input type="text" class="mControl" name="database" id="database" placeholder="Enter any database name" list="dbname">

                <datalist id="dbname">
                    <option value="MySQL">MySQL</option>
                    <option value="SQL Server">SQL Server</option>
                    <option value="MongoDB">MongoDB</option>
                    <option value="Postgres">Postgres</option>
                    <option value="SqLite">SqLite</option>

                </datalist>



                <fieldset style="display:flex;margin-top:10px;">
                    <legend>please select gender</legend>
                    <input type="radio" name="gender" id="gender" value="male">Male
                    <input type="radio" name="gender" id="gender" value="female">Female

                </fieldset>


                <fieldset style="display:flex;margin-top:10px;padding:12px;width:90%;">
                    <legend>please select interest</legend>
                    <input type="checkbox" class="interest" name="interest" id="interest" value="web Development">Web Development
                    <input type="checkbox" class="interest" name="interest" id="interest" value="App Development">App Development
                    <input type="checkbox" class="interest" name="interest" id="interest" value="Desktop Application">Desktop Application
                    <input type="checkbox" class="interest" name="interest" id="interest" value="Machine Learning">Machine Learning


                </fieldset>

                <input type="submit" class="mSubmit" value="Save Data">
            </fieldset>
        </form>
    </div>
    <div style="display:flex;margin:20px;" id="videos">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/DEq_k0ccYLU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <video src="Nature.mp4"  width="560" height="315" controls>
            <source src="Nature.mp4" type="video/mp4">
            <source src="Nature.ogg" type="video/ogg">
        </video>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>