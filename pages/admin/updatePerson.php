<?php
if (session_status() !== PHP_SESSION_ACTIVE) session_start();
if (!isset($_SESSION["loggedUser"])) {
    exit("Unable to open admin page");
}
if (isset($_GET["edit"])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include('../../conn.php');
        echo "<script>console.log('Updating person data')</script>";
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $genre = $_POST['genre'];
        if ($genre == 0) {
            $genre = "?";
        } else if ($genre == 1) {
            $genre = "M";
        } else {
            $genre = "F";
        }
        echo "<script>console.log('Setting SQL Statement')</script>";

        $sql = "UPDATE persons SET 
        fullName=" . "'$name'" . ", phone=" . "'$phone'" . ", email=" . "'$email'" . ", address=" . "'$address'" . ", genre=" . "'$genre'" . 
        " WHERE idPerson=".$_GET["edit"];
        if ($conn->query($sql)) {
            echo "<script>console.log('Person updated sucessfully')</script>";
        }
        if ($conn->errno) {
            echo "<script>console.log('Something goes wrong')</script>";
            echo "Could not insert record into table: %s<br/>" . $conn->error;
        }
        $conn->close();
        header("Location: adminPersons.php");
    }
} else {
    exit("Unable to edit or update Person");
}

?>
