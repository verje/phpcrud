<?php
if(session_status() !== PHP_SESSION_ACTIVE) session_start();
if (!isset($_SESSION["loggedUser"])) {
    exit("Unable to open admin page");
}
if (isset($_GET["del"])) {
    include('../../conn.php');
    $sql = "DELETE FROM persons WHERE idPerson=" . $_GET["del"];
    if ($conn->query($sql)) {
        echo "<script>console.log('Record deleted successfully')</script>";
        header("Location: adminPersons.php?personDeleted=1");
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    $conn->close();
} else {
    echo "<script>console.log('Parameter for ID not available')</script>";
}
