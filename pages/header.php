<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_REQUEST['username']);
    $password = trim($_REQUEST['password']);
    $success = true;
    if (empty($username)) {
        echo "<script>document.getElementById(\"loginMsgContainer\").style.display=\"flex\";
                      document.getElementById(\"loginMsgText\").innerText = 'Type a username';
                </script>";
        $success = false;
    } else if (empty($password)) {
        echo "<script>document.getElementById(\"loginMsgContainer\").style.display=\"flex\";
                      document.getElementById(\"loginMsgText\").innerText = 'Invalid password';
                </script>";        
        $success = false;
    }
    if ($success) {
        include('conn.php');
        $sql = "SELECT password, state FROM users WHERE username='$username'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if ($row["state"] == "1") {
                if ($row["password"] == $password) {
                    $_SESSION["loggedUser"] = $username;
                    $password = "";
                    $msg = "Session started for " . $username . ". Redirecting to admin page...";
                    echo "<script>closeLogin(0)</script>";
                    echo "<script>
                            document.getElementById(\"loginMsgContainer\").style.display=\"none\";
                            document.getElementById(\"loginMsgText\").innerText = '';
                        </script>";                  
                    header("location: pages/admin/adminPersons.php");
                } else {
                    echo "<script>document.getElementById(\"loginMsgContainer\").style.display=\"flex\";
                    document.getElementById(\"loginMsgText\").innerText = 'Incorrect Password';
                    </script>"; 
                };
            } else {
                echo "<script>document.getElementById(\"loginMsgContainer\").style.display=\"flex\";
                document.getElementById(\"loginMsgText\").innerText = 'Username blocked. Please contact your administrator';
                </script>"; 
            }
        } else {
            echo "<script>document.getElementById(\"loginMsgContainer\").style.display=\"flex\";
            document.getElementById(\"loginMsgText\").innerText = 'Username not found';
            </script>"; 
        }
    }
}
?>
<div class="headerContainer">
    <div class="logoBar">
        <div class="logo flex-acenter">
            <div>
                <span><img src="images/logoTatooWhite.png" width="50px" height="50px"></span>
            </div>
            <div>
                <h1>Tatuart Masters</h1>
            </div>
        </div>
        <div class="ws flex-acenter">
            <span><svg xmlns="http://www.w3.org/2000/svg" height="35" width="35" viewBox="0 0 448 512">
                    <path fill="#FFF" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                </svg></span>
            <span class="tlf">04241920393</span>
        </div>
        <div class="horario flex-acenter">
            <div>
                <span><svg xmlns="http://www.w3.org/2000/svg" height="30" width="30" viewBox="0 0 512 512">
                        <path fill="#FFF" d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                    </svg></span>
            </div>
            <div class="labor">
                <span>Monday to Friday</span><br>
                <span>9am - 6pm</span>
            </div>


        </div>
    </div>

    <nav class="flex-acenter">
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#team">Team</a></li>

        </ul>
        <div>
            <a href="#formCitas" class="abtn">Book an appointment</a>
            <?php if (isset($_SESSION["loggedUser"])) {
                echo "<a href=\"pages/admin/logout.php\" class='loginLink'>" . $_SESSION["loggedUser"] . "</a>";
                
            } else {
                echo "<a id='login' onclick='openLogin()' class='loginLink'>Log in</a>";
            } ?>
        </div>
    </nav>
    <?php include('pages/loginForm.php') ?>
</div>



