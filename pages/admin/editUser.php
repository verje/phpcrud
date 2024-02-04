<?php
if (session_status() !== PHP_SESSION_ACTIVE) session_start();
if (!isset($_SESSION["loggedUser"])) {
    exit("Unable to open admin page");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="styles/stylesAdmin.css">
    <link rel="stylesheet" href="../../styles/estilos.css">
    <?php
    include '../head.html'
    ?>
</head>

<body onload="setMenu(0,1,0)">
    <div class="wrapperAdmin">
        <div class="searchBar blackPluses">
            <div>
                <span class="titleAdmin">Tatuart Masters</span>
            </div>
            <div class="searchBar">
                <input type="text" name="inputSearch" id="" placeholder="Search for user...">
                <div><i class="fa-solid fa-magnifying-glass iconColor"></i></div>
                <span class="logged" title="Close session"><a href="logout.php" style="color: white"><?php echo $_SESSION['loggedUser'] ?></a></span>
            </div>
        </div>

        <div class="mainScreen">
            <aside>
                <?php
                include('menuUser.php');
                ?>
            </aside>
            <div class="actionScreen">
                <div class="contentAction">
                    <div class="flex-acenter titleAction">
                        <div class="actionText">
                            <p>Updating User</p>
                            <p>In this section, you can make changes for >User data</p>
                        </div>
                    </div>
                    <div class="addNewContainer" id="addNew">
                        <?php include('editUserForm.php') ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="blackPluses">
        <?php include('../../pages/footer.html') ?>
    </div>
</body>

<script src="../../scripts.js"></script>