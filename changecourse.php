<?php
header("Location: error.php");
$tid = filter_input(INPUT_POST, 'tid');
$course = filter_input(INPUT_POST, 'course');


$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "project";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()) {
    die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
} else {
    $sql = "INSERT INTO registration (tid,course)
    VALUES ('$tid', '$course')";
    
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
