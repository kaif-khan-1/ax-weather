<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "axweather";
$con = mysqli_connect($servername, $username, $password, $database);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact_messages (name, email, message) VALUES ('$name', '$email', '$message')";

    if (mysqli_query($con, $sql)) {
        echo "Message sent successfully!";
    } else {
        echo "Error While Sending Messages: " . $sql . "<br>" . mysqli_error($con);
    }
}

mysqli_close($con);
?>














