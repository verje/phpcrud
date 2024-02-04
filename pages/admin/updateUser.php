<?php
if (session_status() !== PHP_SESSION_ACTIVE) session_start();
if (!isset($_SESSION["loggedUser"])) {
    exit("Unable to open admin page");
}
if (isset($_GET["update"])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include('../../conn.php');
        echo "<script>console.log('Updating person data')</script>";
        $user = $_POST['username'];
        $pass = $_POST['password'];
        $passC = $_POST['passConfirm'];

        echo "<script>console.log('Setting SQL Statement')</script>";

        $sql = "UPDATE users SET username=" . "'$user'" . ", password=" . "'$pass'" . " WHERE idUser=".$_GET["update"];
        if ($conn->query($sql)) {
            echo "<script>console.log('Username updated sucessfully')</script>";
        }
        if ($conn->errno) {
            echo "<script>console.log('Something goes wrong')</script>";
            echo "Could not insert record into table: %s<br/>" . $conn->error;
        }
        $conn->close();
        header("Location: adminUsers.php");
    }
} else {
    exit("Unable to edit or update Username");
}

?>
