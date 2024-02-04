<?php
    if(session_status() !== PHP_SESSION_ACTIVE) session_start();
    if (!isset($_SESSION["loggedUser"])) {
        exit("Unable to open admin page");
    } 
?>
<div class="menuContainer">
    <div class="menuUser" id="menuUser">
        <div class="gridButtons">
            <div class="" id="action1" style="cursor:pointer;">
                <a href="adminPersons.php" class="action" style="font-size: 16px;">
                    <i class="fa-regular fa-address-card fa-2xl iconColor"></i>
                    <p class="linkMenu">Persons</p>
                </a>
            </div>
            <div class="" id="action2" style="cursor:pointer;">
                <a href="adminUsers.php" class="action" style="font-size: 16px;">
                    <i class="fa-regular fa-user fa-2xl iconColor"></i>
                    <p class="linkMenu">Users</p>
                </a>
            </div>
            <div class="" id="action4" style="cursor:pointer;">
                <a href="adminArtist.php" class="action" style="font-size: 16px;">
                    <i class="fa-solid fa-paintbrush fa-2xl iconColor"></i>
                    <p class="linkMenu">Artist</p>
                </a>
            </div>
            <div class="" id="action5" style="cursor:pointer;">
                <a href="adminGallery.php" class="action" style="font-size: 16px;">
                    <i class="fa-regular fa-image fa-2xl iconColor"></i>
                    <p class="linkMenu">Gallery</p>
                </a>
            </div>
            <div class="" id="action3" style="cursor:pointer;">
                <a href="showAll.php" class="action" style="font-size: 16px;">
                    <i class="fa-solid fa-list-ul fa-2xl iconColor"></i>
                    <p class="linkMenu">Show All</p>
                </a>
            </div>            
        </div>
    </div>
</div>
<script>
    function setMenu(a, b, c) {
        if (a == 1) {
            document.getElementById("action1").classList.add("activeMenu");
            document.getElementById("action2").classList.remove("activeMenu");
            document.getElementById("action3").classList.remove("activeMenu");
        } else if (b == 1) {
            document.getElementById("action1").classList.remove("activeMenu");
            document.getElementById("action2").classList.add("activeMenu");
            document.getElementById("action3").classList.remove("activeMenu");
        } else {
            document.getElementById("action1").classList.remove("activeMenu");
            document.getElementById("action2").classList.remove("activeMenu");
            document.getElementById("action3").classList.add("activeMenu");
        }
    }
</script>