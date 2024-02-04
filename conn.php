<?php
$serverUser = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "company";

// Create connection
$conn = new mysqli($serverUser, $dbUserName, $dbPassword, $dbName);

// Check connection
if ($conn->error) {
  try {    
      throw new Exception("MySQL error $mysqli->error <br> Query:<br> $query", $msqli->errno);    
  } catch(Exception $e ) {
      echo "Something failed trying to connect to server: ".$e->getCode(). " - ". $e->getMessage() . "<br >";
      echo nl2br($e->getTraceAsString());
  }
}
?>