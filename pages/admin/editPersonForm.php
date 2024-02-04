<?php
    if(session_status() !== PHP_SESSION_ACTIVE) session_start();
    if (!isset($_SESSION["loggedUser"])) {
        exit("Unable to open admin page");
    } 
    if(isset($_GET["edit"])){
        include('../../conn.php');
        $sql = "SELECT * FROM persons where idPerson=" . $_GET["edit"];
        $result = $conn->query($sql);
        if ($result) {
            //die('Could not query:' . $conn->error);
            $row = $result -> fetch_assoc();
        }
    } else {
        exit("Unable to edit or update Person");
    }
?>

<div>
    <form id="formAddNewPerson" action="updatePerson.php?edit=<?php echo $row["idPerson"]?>" method="POST">
        <input type="hidden" name="goto" value="<?php echo $_SERVER["REQUEST_URI"] ?>">
        <div class="pad10">
            <input type="text" name="name" value="<?php echo $row['fullName'] ?>">
        </div>
        <div class="pad10">
            <span id="genre" style="color: var(--myBlueGray)">Genre:</span>
            <input type="range" name="genre" min="0" max="2" value="<?php if($row['genre']=="M"){ 
                                                                                echo "1";
                                                                            } elseif($row["genre"]=="F"){
                                                                                echo "2";
                                                                            }else{
                                                                                echo "0";
                                                                            }?>" class="slider" onchange="setGenre(this.value)">
            <div class="flex-acenter sexIcons">
                <div><i class="fa-solid fa-question"></i></div>
                <div><i class="fa-solid fa-mars" style="color: var(--myBlue)"></i></div>
                <div><i class="fa-solid fa-venus" style="color: pink"></i></div>
            </div>
        </div>
        <div class="pad10">
            <input type="email" name="email" value="<?php echo $row["email"] ?>">
        </div>
        <div class="pad10">
            <input type="tel" name="phone" value="<?php echo $row["phone"] ?>">
        </div>
        <div class="pad10">
            <input type="text" name="address"value="<?php echo $row["address"] ?>">
        </div>
        <br>
        <button type="submit" class="abtn" style="background-color: var(--myBlack);">Update Person</button>
    </form>
</div>

