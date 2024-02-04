<?php
    if(session_status() !== PHP_SESSION_ACTIVE) session_start();
    if (!isset($_SESSION["loggedUser"])) {
        exit("Unable to open admin page");
    } 
    include('../../conn.php');
    $sql = "SELECT * FROM persons";
    $result = $conn->query($sql);
?>
<div class="actionText">
    <p>Create new Username</p>
    <p>Fill all form field to proceed</p>
</div>
<div class="stepbystep flex-acenter">
    <div id="step1" class="circleStepOk">
        <i class="fa-solid fa-users"></i>
        <span id="titleStep1" class="titleStep">Person</span>
    </div>
    <span id="stepSpan2" class="lineStep"></span>
    <div id="step2" class="circleStep">
        <i class="fa-solid fa-circle-user"></i>
        <span id="titleStep1" class="titleStep">Username</span>
    </div>
    <span id="stepSpan3" class="lineStep"></span>
    <div id="step3" class="circleStep">
        <i class="fa-solid fa-lock"></i>
        <span id="titleStep1" class="titleStep">Password</span>
    </div>
</div>
<div>
    <form id="formAddNewUser" action="saveUsername.php" method="POST">
        <input type="hidden" name="step" value=1 id="step">
        <div id="step1Inputs">
            <select name="name" id="userFor">
                
                <?php
                    if ($result->num_rows > 0) { ?>
                        <option value="0" selected>Create username for</option>
                        <?php
                        while ($row = $result->fetch_assoc()) { ?>
                            <option value="<?php echo $row["idPerson"] ?>"><?php echo $row["fullName"] ?></option>
                    <?php }
                    } else { ?>
                        <option value="0" selected>No persons in list</option>
                <?php } ?>          
            </select>
        </div>

        <div id="step2Inputs" style="display:none;">
            <input type="text" name="username" id="user" placeholder="Username" autocomplete="off">
        </div>
        <div id="step3Inputs" style="display:none;">
            <input type="password" name="password" id="pass" placeholder="Type password" autocomplete="off">
            <input type="password" name="passwordConfirm" id="passConfirm" placeholder="Confirm password" autocomplete="off" oninput="comparePass(this.value)">
        </div>
        <div style="padding: 5px ">
            <i>
                <p id="msg" style="font-size: 12px; color: red;"></p>
            </i>
        </div>
        <div style="display: flex; justify-content:space-evenly">
            <button id="btnPrev" type="button" class="btnAdd" onclick="gotoStep('-1')" style="background-color: var(--myBei); display:none;">Previous</button>
            <button id="btnNext" type="button" class="btnAdd" onclick="gotoStep('1')">Next</button>
            <button type="submit" class="btnAdd" style="display:none;" id="btnSave">Register</button>
        </div>
        <div style="padding-top: 5px;">
            <a onclick="closeAddnewform('formAddNewUser')" style="font-size:12px;">Close</a>
        </div>
    </form>
</div>
