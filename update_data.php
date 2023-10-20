<?php


include("./db_conn.php");

if (isset($_REQUEST['update_id'])) {

    $update_id = $_REQUEST['update_id'];

    $sql = "SELECT * FROM std_data WHERE std_id=$update_id";

    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);

    // $db_user_email = $row['user_email'];
    // $db_user_pass = $row['user_pass'];

}

if (isset($_REQUEST['update_data'])) {

    $update_user_email = $_REQUEST['update_user_email'];
    $update_user_pass = $_REQUEST['update_user_pass'];
    $update_std_id = $_REQUEST['update_std_id'];

    $sql = "UPDATE std_data SET user_email='$update_user_email', user_pass='$update_user_pass' WHERE std_id=$update_std_id";

    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
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
        <h1 class="text-center my-5">Update Details</h1>
        <div class="row">
            <div class="col-md-6 mx-auto">
                <form method="post">
                    <input type="hidden" value="<?php echo $update_id ?>" name="update_std_id">
                    <input type="email" value="<?php echo  $row['user_email'] ?>" placeholder="Enter Your Emal" class="form-control mb-3" name="update_user_email">
                    <input type="text" value="<?php echo  $row['user_pass'] ?>" placeholder="Enter Your Password" class="form-control mb-3" name="update_user_pass">
                    <button class="btn btn-primary" type="submit" name="update_data">Update</button>
                </form>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>