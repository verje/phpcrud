<?php
if(session_status() !== PHP_SESSION_ACTIVE) session_start();
if (!isset($_SESSION["loggedUser"])) {
    exit("Unable to open admin page");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../../styles/stylesAdmin.css">
    <link rel="stylesheet" href="../../styles/estilos.css">
    <?php
    include '../head.html'
    ?>
</head>

<body onload="setMenu(0,0,1)">
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
                            <p>List Dashboard</p>
                            <p>Listing all record on Persons and Users</p>
                        </div>
                    </div>
                    <div id="tableContainer">
                        <?php include("tablePerson.php"); ?>
                    </div>
                    <div id="tableContainer" style="margin-top: 60px;">
                        <?php include("tableUser.php"); ?>
                    </div>                    
                </div>
             </div>
        </div>
    </div>
    <div class="blackPluses">
        <?php include('../../pages/footer.html') ?>
    </div>
</body>