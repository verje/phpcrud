<?php
if(session_status() !== PHP_SESSION_ACTIVE) session_start();
if (!isset($_SESSION["loggedUser"])) {
    exit("Unable to open admin page");
}
include('../../conn.php');
if (isset($_GET['idUser'])) {
    if (isset($_GET['state'])) {
        $newState = ($_GET['state'] == "1") ? "0" : "1";
        $sql = "UPDATE users SET state='$newState' WHERE idUser=".$_GET['idUser'];
        if ($conn->query($sql) === TRUE) {
            echo "<div id=\"updateMsg\" class=\"flex-acenter\" onclick='this.style.display=\"none\"'>
                        <div class=\"flex-acenter closex\">x</div>
                        <div class=\"action flex-acenter\">Record updated successfully</div>
                </div>";
        }
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
?>
<table>
    <thead>
        <tr>
            <th style="width: 150px;">Username</th>
            <th style="width: 150px;">Password</th>
            <th style="width: 80px;">Status</th>
            <th style="width: 80px;">Edit</th>
            <th style="width: 80px;">Delete</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM users";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row["userName"] ?></td>
                    <td><?php echo $row["password"] ?></td>
                    <td><a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>?idUser=<?php echo $row["idUser"]; ?>&state=<?php  echo $row["state"]; ?>" class="status status<?php echo $row["state"] ?>"><?php if ($row["state"] == "1") {
                                                                                                                                                                                echo "Active";
                                                                                                                                                                            } else {
                                                                                                                                                                                echo "Blocked";
                                                                                                                                                                            } ?></a>
                    </td>
                    <td><a href="editUser.php?edit=<?php echo $row["idUser"] ?>"><i class="fa-regular fa-pen-to-square" style="color:var(--myBei)"></i></a></td>
                    <td><a href="deleteUSer.php?del=<?php echo $row["idUser"] ?>"><i class="fa-regular fa-trash-can" style="color:salmon"></i></a></td>
                </tr>
        <?php }
        } else {
            echo "0 results";
        } ?>
    </tbody>
</table>