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
        <h1 class="text-center">Students Data</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Std ID</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("./db_conn.php");

                $sql = "SELECT * FROM std_data";
                $result = mysqli_query($conn, $sql);


                if (mysqli_num_rows($result) > 0) {


                    while ($row  =  mysqli_fetch_assoc($result)) {
                ?>

                        <tr>
                            <th scope="row"><?php echo $row['std_id']; ?></th>
                            <td scope="row"><?php echo $row['user_email']; ?></td>
                            <td scope="row"><?php echo $row['user_pass']; ?></td>
                            <td>
                                <a href="./delete_data.php?del_id=<?php echo $row['std_id']; ?>" class="btn btn-danger">Delete</a>
                                <a href="./update_data.php?update_id=<?php echo $row['std_id']; ?>" class="btn btn-secondary">Edit</a>
                            </td>
                        </tr>

                <?php
                    }
                } else {
                    ?>
                    <tr>
                        <td colspan="4">
                            <h3 class="text-center text-danger">No Record Found</h3>
                        </td>
                    </tr>
                    <?php
                }
                mysqli_close($conn);
                ?>

            </tbody>
        </table>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>