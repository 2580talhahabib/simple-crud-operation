<?php

if (isset($_REQUEST['submit'])) {


    include("./db_conn.php");

    $user_email = $_REQUEST['user_email'];
    $user_pass = $_REQUEST['user_pass'];


    // inserting data into database table

    $sql = "INSERT INTO std_data ( user_email, user_pass)
                    VALUES ( '$user_email', '$user_pass')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>CRUD Operation</title>

</head>

<body>
    <div class="container">
        <h1 class="text-center my-5">Registration Form</h1>
        <div class="row">
            <div class="col-md-6 mx-auto">
                <form method="post">
                    <input type="email" placeholder="Enter Your Emal" class="form-control mb-3" name="user_email">
                    <input type="password" placeholder="Enter Your Password" class="form-control mb-3" name="user_pass">
                    <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>