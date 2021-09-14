<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="style.css">
    <title>Title</title>
</head>

<body>

    <div class="container my-5 ">
        <div class="card col-md-8 m-auto shadow">
            <div class="card-header text-center">Ajax validation in php</div>
            <div class="card-body">
                <form action="" method="post">

                    <div class="row py-2">
                        <div class="col-md-6">
                            <input type="text" name="aName" id="aName" class="form-control" placeholder="Enter Name!!">

                        </div>
                        <div class="col-md-6 nameVal" id="nameVal">

                        </div>

                    </div>

                    <div class="row py-2">
                        <div class="col-md-6">
                            <input type="email" name="aEmail" id="aEmail" class="form-control" placeholder="Enter Email!!">
                        </div>
                        <div class="col-md-6 emailVal" id="emailVal">


                        </div>

                    </div>

                    <div class="row py-2">
                        <div class="col-md-6">
                            <input type="number" name="aMobile" id="aMobile" class="form-control" placeholder="Enter Mobile!!">
                        </div>
                        <div class="col-md-6 mobileVal" id="mobileVal">


                        </div>

                    </div>

                    <div class="row py-3">
                        <div class="col-md-4 m-auto">
                            <input type="submit" class="btn btn-block btn-primary" name="ajaxSave" id="ajaxSave" value="Ajax Save">
                        </div>

                    </div>


                </form>



            </div>


        </div>




    </div>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>


    <script>
        // alert('abc');

        // $('#aName,#aEmail,#aMobile').on('blur', function() {  //multiple selector
        //     alert($(this).val());
        // });


        // ajax for name

        $('#aEmail').on('blur', function() {
            var aEmail = $(this).val();

            // alert(aEmail);

            $.ajax({ // always double check your jquery to make sure to be able to run ajax code, jquery should be of slim build
                url: 'validation.php',
                type: 'POST',
                data: 'aEmail=' + aEmail,
                success: function(result) {
                    // alert(result);
                    if (result == 'failed') {
                        $('#emailVal').html('<p class="text-danger"> Invalid Email Format </p>');
                    } else if (result == 'success') {
                        $('#emailVal').html('<p class="text-success"> congarts, you can proceed now </p>');
                    }

                }

            });

        });


        //ajax for email


        $('#aName').on('blur', function() {
            var aName = $(this).val();

            // alert(aName);

            $.ajax({ // always double check your jquery to make sure to be able to run ajax code, jquery should be of slim build
                url: 'validation.php',
                type: 'POST',
                data: 'aName=' + aName,
                success: function(result) {

                    // alert(result);
                    if (result == 'failed') {
                        $('#nameVal').html('<p class="text-danger"> only letters and spaces with minimum 3 characters are allowed </p>');
                    } else if (result == 'success') {
                        $('#nameVal').html('<p class="text-success"> congarts, you can proceed now </p>');
                    }

                }

            });

        });


        //ajax for mobile

        $('#aMobile').on('blur', function() {
            var aMobile = $(this).val();

            // alert(aMobile);

            $.ajax({ // always double check your jquery to make sure to be able to run ajax code, jquery should be of slim build
                url: 'validation.php',
                type: 'POST',
                data: 'aMobile=' + aMobile,
                success: function(result) {

                    // alert(result);
                    if (result == 'failed') {
                        $('#mobileVal').html('<p class="text-danger"> only 10 digits are allowed</p>');
                    } else if (result == 'success') {
                        $('#mobileVal').html('<p class="text-success"> congarts, you can proceed now </p>');
                    }

                }

            });

        });








        let aEmail = document.getElementById('aEmail').val();
        let aMobile = document.getElementById('aMobile').val();
    </script>


</body>

</html>