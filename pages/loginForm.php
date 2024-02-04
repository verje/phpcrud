<div class="login" id="formLogin" style="display: none;">
    <div>
        <h1 style="font-family: 'Roboto';">Log in</h1>
        <i class="fa-solid fa-lock" style="margin-top:10px;"></i>
    </div>

    <div class="formInputs">

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <div class="pad10">
                <input type="text" name="username" id="user" placeholder="Username" autocomplete="off">
            </div>
            <div class="pad10">
                <input type="password" name="password" id="pass" placeholder="Type your password" autocomplete="off">
            </div>

            <button type="submit" class="abtn">Log in</button><br>
            <a onclick="closeLogin(1)">Close</a>
        </form>
    </div>
</div>


