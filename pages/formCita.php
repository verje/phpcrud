<?php
    include('conn.php');
    $sql = "SELECT * FROM persons WHERE role='Artist'";
    $result = $conn->query($sql);
?>
<form action="process/saveCita.php" method="post">
    <input type="hidden" name="goto" value="<?php echo $_SERVER["REQUEST_URI"] ?>">
    <div class="pad10"><input type="text" name="name" placeholder="Full Name"></div>
    <div class="pad10"><input type="email" name="email" placeholder="Type an email, please"></div>
    <div class="pad10"><input type="tel" name="phone" placeholder="Your contact phone number"></div>
    <div class="pad10">
        <select name="tatoo" id="tatus">
            <option value="0" selected>What tattoo you deserve?</option>
            <option value="1">Logo Magallanes</option>
        </select>
    </div>
    <div class="pad10">
        <select name="artist" id="artist">
            <?php
            if ($result->num_rows > 0) { ?>
                <option value="0" selected>Preferred Artist</option>
                <?php
                while ($row = $result->fetch_assoc()) { ?>
                    <option value="<?php echo $row["idPerson"] ?>"><?php echo $row["fullName"] ?></option>
                <?php }
            } else { ?>
                <option value="0" selected>No Artists in list</option>
            <?php } ?>
        </select>
    </div>
    <div class="horarioInputs flex-acenter pad10">
        <div><input type="date" name="date"></div>
        <div><input type="time" name="time"></div>
    </div>
    <div class="horarioInputs flex-acenter pad10">
        <div class="flex-acenter"><input type="checkbox" name="checkSave" id="save"></div>
        <div class="flex-acenter"><label for="save" style="font-size: 12px; color: white;"> I wish to save my data as Client</label></div>
    </div>

    <button type="submit" class="abtn" style="background-color: rgb(15, 14, 14);">Book appointment</button>
</form>