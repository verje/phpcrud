<?php
if (session_status() !== PHP_SESSION_ACTIVE) session_start();
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

<body onload="setMenu(1,0,0)">
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
            <div class="actionScreen" style="display: flex;">
                <div class="w50 contentAction">
                    <div class="actionText">
                        <p>Upload picture to gallery</p>
                        <p>Administration gallery dashboard</p>
                    </div>
                    <div>
                        <?php include("upload.php"); ?>
                    </div>
                </div>
                <div class="w50 gridGallery">
                    <?php include("gridGallery.php"); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="blackPluses">
        <?php include('../../pages/footer.html') ?>
    </div>
</body>
<script src="../../scripts.js"></script>