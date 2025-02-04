<?php
$insert = false;
if (isset($_POST['name'])) {

    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if (!$con) {
        die("Connection to this database failed due to" . mysqli_connect_error());
    }

    // echo "Sucessfully connected to the databse";

    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];

    $sql = "INSERT INTO `trip`.`trip` (`name`,`age`,`gender`,`email`,`phone`,`other`,`dt`) VALUES ('$name','$age','$gender','$email','$phone','$desc', current_timestamp());";
    // echo $sql;

    if ($con->query($sql) == true) {
        // echo "Successfully inserted";
        $insert = true;
    } else {
        echo "Error: $sql <br> $con->error";
    }

    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Travel Trip Form</title>
    <link rel="stylesheet" href="styles.css" />
</head>

<body>
    <img class="bg" src="trip-bg.jpg" alt="img">
    <div class="container">
        <h1>Welcome to India. Trip Form</h1>
        <p>Enter your details and submit to confirm participation in trip</p>

        <?php

        if ($insert == true) {
            echo "<p class = 'submitMsg'>Thanks for submitting form</p>";
        }

        ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Developer Affan" />
            <input type="number" name="age" id="age" placeholder="enter your age" />
            <input type="text" name="gender" id="gender" placeholder="male" />
            <input type="email" name="email" id="email" placeholder="affan@gmail.com" />
            <input type="phone" name="phone" id="phone" placeholder="9339828230" />
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Describe yourself"></textarea>

            <button class="btn">Submit</button>

        </form>
    </div>
    <script src="index.js"></script>
</body>

</html>