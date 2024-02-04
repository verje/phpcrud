<?php
    if(session_status() !== PHP_SESSION_ACTIVE) session_start();
    if (!isset($_SESSION["loggedUser"])) {
        exit("Unable to open admin page");
    } 
?>

<div class="actionText">
    <p>Add new Person</p>
    <p>Fill all form field to proceed</p>
</div>
<div>
    <form id="formAddNewPerson" action="savePerson.php" method="POST">
        <input type="hidden" name="goto" value="<?php echo $_SERVER["REQUEST_URI"] ?>">
        <div class="pad10">
            <input type="text" name="name" placeholder="Full Name">
        </div>
        <div class="pad10">
            <span id="genre" style="color: var(--myBlueGray)">Genre:</span>
            <input type="range" name="genre" min="0" max="2" value="0" class="slider" onchange="setGenre(this.value)">
            <div class="flex-acenter sexIcons">
                <div><i class="fa-solid fa-question"></i></div>
                <div><i class="fa-solid fa-mars" style="color: var(--myBlue)"></i></div>
                <div><i class="fa-solid fa-venus" style="color: pink"></i></div>
            </div>
        </div>
        <div class="pad10">
            <input type="email" name="email" placeholder="Type an email, please">
        </div>
        <div class="pad10">
            <input type="tel" name="phone" placeholder="Your contact phone number">
        </div>
        <div class="pad10">
            <input type="text" name="address" placeholder="Address Person">
        </div>
        <div class="pad10">
            <select name="role" id="">
                <option value="role" selected>What role have this person?</option>
                <option value="Artist">Artist</option>
                <option value="Administrative">Administrative</option>
            </select>
        </div>        
        <br>
        <button type="submit" class="abtn" style="background-color: var(--myBlack);">Save Person</button>
        <div style="padding-top: 5px;">
            <a onclick="closeAddnewform('formAddNewPerson')" style="font-size:12px;">Close</a>
        </div>
    </form>
</div>
