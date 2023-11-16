<!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
<?php
    // Database configuration
    $servername = "localhost";
    $username = "your_username";
    $password = "your_password";
    $dbname = "bloodbank";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve the input data from the form
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $bloodgroup = $_POST['bloodgroup'];
    $phone = $_POST['phone'];

    // Insert the data into the database
    $sql = "INSERT INTO donors (firstname, lastname, dob, bloodgroup, phone) VALUES ('$fname', '$lname', '$dob', '$bloodgroup', '$phone')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
?>
</body>
</html>
