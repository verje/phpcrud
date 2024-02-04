<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="styles/estilos.css">
    <?php
    if (session_status() !== PHP_SESSION_ACTIVE) session_start();
    include 'pages/head.html'
    ?>
</head>

<body>
    <div class="wrapper">
        <div id="loginMsgContainer" onclick="this.style.display='none'" style="display: none;">
            <div id=""><i class="fa-solid fa-triangle-exclamation" style="color: white;"></i></div>
            <div id="loginMsgText" style="color: white; padding: 5px 10px;"></div>
            <div id="closeMsg"><i class="fa-solid fa-close" style="color: white;"></i></div>
        </div>
        <header id="inicio" class="flex-acenter blackPluses">
            <?php include 'pages/header.php' ?>
        </header>

        <main class="flex-acenter">
            <h1>Welcome to Tatuart Masters</h1>
            <h4>Get the tattoo you deserve!</h4>
            <a class="abtn" href="#">See more</a>
        </main>
        <div id="gallery" class="gallery flex-acenter">
            <?php include 'pages/gallery.php' ?>
        </div>
        <div id="team" class="artists flex-acenter">
            <?php include 'pages/artists.php' ?>
        </div>
        <div class="formContainer flex-acenter">
            <div class="wrapperForm flex-acenter">
                <div class="formImg flex-acenter">
                    <h1>Get a Tattoo</h1>
                </div>
                <div class="formInputs" id="formCitas">
                    <h1>Book your appoinment</h1>
                    <?php include 'pages/formCita.php' ?>
                </div>
            </div>
        </div>
        <footer class="blackPluses">
            <?php include('pages/footer.html') ?>
        </footer>
    </div>

</body>

</html>
<script src="./scripts.js"></script>