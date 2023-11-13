<?php
header("Location: error.php");
$username = filter_input(INPUT_POST, 'firstname');
$lastname = filter_input(INPUT_POST, 'lastname');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');
$year = filter_input(INPUT_POST, 'year');
$number = filter_input(INPUT_POST, 'number');
$course = filter_input(INPUT_POST, 'button');

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "project";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()) {
    die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
} else {
    $sql = "INSERT INTO account (firstname, lastname, email, password, year, number, course)
    VALUES ('$username', '$lastname', '$email', '$password', '$year', '$number', '$course')";
    
    if ($conn->query($sql)) {
        echo "INSERTED success";
    } else {
        echo "Error: " . $sql . " " . $conn->error;
    }

    $conn->close();
    header('Location: admin.html');
    
exit;
}
?>
