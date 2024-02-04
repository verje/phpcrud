<?php
if(session_status() !== PHP_SESSION_ACTIVE) session_start();
if (!isset($_SESSION["loggedUser"])) {
    exit("Unable to open admin page");
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include('../../conn.php');
    echo "<script>console.log('Saving person')</script>";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $genre = $_POST['genre'];
    $role = $_POST['role'];    
    if ($genre == 0) {
        $genre = "?";
    } else if ($genre == 1) {
        $genre = "M";
    } else {
        $genre = "F";
    }
    echo "<script>console.log('Setting SQL Statement')</script>";

    $sql = "INSERT INTO persons " .
        "(fullName, phone, email, address, genre, role) " . "VALUES " .
        "('$name','$phone','$email', '$address', '$genre', '$role')";

    if ($conn->query($sql)) {
        echo "<script>console.log('Person inserted sucessfully')</script>";
    }
    if ($conn->errno) {
        echo "<script>console.log('Something goes wrong')</script>";
        echo "Could not insert record into table: %s<br/>" . $conn->error;
    }
    $conn->close();
    header("Location: adminPersons.php");
}
