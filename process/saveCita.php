<?php
$consoleMsg = 'Saving appointment';
include('../conn.php');
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$sql = "INSERT INTO clients " .
    "(fullName, email, phone, sex, address) " . "VALUES " .
    "('$name','$email','$phone', 'M', 'La Candelaria')";
if ($conn->query($sql)) {
    printf("Record inserted successfully.<br />");
}
if ($conn->errno) {
    printf("Could not insert record into table: %s<br />", $conn->error);
}
$conn->close();

if (isset($_REQUEST["goto"])) {
    header("Location: {$_REQUEST["goto"]}");
} else if (isset($_SERVER["HTTP_REFERER"])) {
    header("Location: {$_SERVER["HTTP_REFERER"]}");
}
