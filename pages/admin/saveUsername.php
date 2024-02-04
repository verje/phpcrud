<?php
if(session_status() !== PHP_SESSION_ACTIVE) session_start();
if (!isset($_SESSION["loggedUser"])) {
    exit("Unable to open admin page");
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include('../../conn.php');
    echo "<script>console.log('Saving username')</script>";
    $id = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo "<script>console.log('Setting SQL Statement')</script>";

    $sql = "INSERT INTO users " .
        "(idPerson, userName, password, state) " . "VALUES " .
        "('$id','$username','$password', '1')";

    if ($conn->query($sql)) {
        echo "<script>console.log('Username inserted sucessfully')</script>";
    }
    if ($conn->errno) {
        echo "<script>console.log('Something goes wrong')</script>";
        echo "Could not insert record into table: %s<br/>" . $conn->error;
    }
    $conn->close();
    header("Location: adminUsers.php");
}
