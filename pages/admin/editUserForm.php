<?php
if (session_status() !== PHP_SESSION_ACTIVE) session_start();
if (!isset($_SESSION["loggedUser"])) {
    exit("Unable to open admin page");
}
if (isset($_GET["edit"])) {
    include('../../conn.php');
    $sql = "SELECT * FROM users where idUser=" . $_GET["edit"];
    $result = $conn->query($sql);
    if ($result) {
        //die('Could not query:' . $conn->error);
        $row = $result->fetch_assoc();
        $sql = "SELECT * FROM persons where idPerson=" . $_GET["edit"];
        $result = $conn->query($sql);
        if ($result) {
            //die('Could not query:' . $conn->error);
            $rowp = $result->fetch_assoc();
        }
    }
} else {
    exit("Unable to edit or User Person");
}
?>

<div>
    <form id="formAddNewPerson" action="updateUser.php?update=<?php echo $row["idUser"] ?>" method="POST">
        <div id="step2Inputs" style="margin-bottom: 20px;">
            <input type="text" name="name" value="<?php echo $rowp["fullName"] ?>" disabled style="background-color:rgba(240,240,240); color: lightgrey">
        </div>
        <div id="step2Inputs" style="margin-bottom: 20px;">
            <label for="user" class="action">Username</label>
            <div class="inputContainer">
                <i class="fa-solid fa-user" style="color: var(--myBlueGray);"></i>
                <input type="text" name="username" id="user" placeholder="Username" autocomplete="off" value="<?php echo $row["userName"] ?>">
            </div>
        </div>
        <div id="step3Inputs" style="margin-bottom: 20px;">
            <label for="user" class="action">Password</label>
            <div class="inputContainer">
                <i class="fa-solid fa-lock" style="color: var(--myBlueGray);"></i>
                <input type="password" name="password" id="pass" placeholder="Password" autocomplete="off" value="<?php echo $row["password"] ?>">
            </div>
        </div>
        <div id="step3Inputs">
            <label for="" class="action">Confirm Password</label>
            <div class="inputContainer">
                <i class="fa-solid fa-lock" style="color: var(--myBlueGray);"></i>
                <input type="password" name="passConfirm" placeholder="Confirm Password" autocomplete="off" oninput="comparePass(this.value)" value="<?php echo $row["password"] ?>">
            </div>
        </div>        

        <div style="padding: 5px ">
            <i>
                <p id="msg" style="font-size: 12px; color: red;"></p>
            </i>
        </div>
        <div style="display: flex; justify-content:space-evenly">
            <button type="submit" class="btnAdd" id="btnSave">Update</button>
        </div>
    </form>
</div>