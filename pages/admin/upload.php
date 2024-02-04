<?php
include('../../conn.php');
$sql = "SELECT * FROM persons WHERE role='Artist'";
$result = $conn->query($sql);
?>
<form class="formUpload" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
    <div class="picInfo">
        <div class="pad10">
            <select name="artist" id="artist">
                <?php
                if ($result->num_rows > 0) { ?>
                    <option value="-1" selected>Which artist does this picture belong to?</option>
                    <?php
                    while ($row = $result->fetch_assoc()) { ?>
                        <option value="<?php echo $row["idPerson"] ?>"><?php echo $row["fullName"] ?></option>
                    <?php }
                } else { ?>
                    <option value="0" selected>No Artists in list</option>
                <?php } ?>
            </select>
        </div>
        <div class="pad10">
            <input type="text" name="titleTattoo" placeholder="Title for tattoo">
        </div>
        <div class="pad10">
            <textarea name="description" oninput="countChars(this.value)" cols="46" rows="6" maxlength="200" placeholder="Tattoo Description and Characteristics" style="padding: 7px; resize: none; border: 1px solid var(--myLaiGrey)"></textarea>
            <div class="borderBar">
                <div class="fillBar" id="progressBar"></div>
            </div>
        </div>
    </div>
    <div class="uploadFrame">
        <div>
            <i class="fa-solid fa-cloud-arrow-up fa-2xl" style="color: var(--myLaiGrey)"></i>
        </div>
        <div class="picNameContainer">
            <p id="picName" class="fontUpload">No File Selected</p>
        </div>
        <div>
            <label for="file" class="fileStyle">
                <p class="btnChoose fontUpload">Choose a file</p>
            </label>
            <input type="file" id="file" name="imagen" onchange="getFileName(this)">

        </div>
        <div class="flexAllCenter pad10">
            <div><input type="checkbox" id="inGallery" name="inGallery"></div>
            <div><label for="inGallery" style="font-size: 12px; color: gray;">&nbsp;Pin to "Our Gallery" Section</label><br></div>
        </div>
        <button type="submit">Upload image</button>
        <div class="flex-acenter" style="justify-content: center; padding: 3px;">
            <div>
                <p id="uploadMsg"> &nbsp;</p>
            </div>
            <div><i class="fa-solid fa-check" style="display: none;"></i></div>
        </div>
    </div>

</form>


<?php
$path = '../../images/gallery/';
$maxSize = 4 * 1024 * 1024;
$typeAllowed = ['image/jpeg', 'image/png'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $artist = $_REQUEST['artist'];
    $title = $_REQUEST['titleTattoo'];
    $description = $_REQUEST['description'];
    $inGallery = $_REQUEST['inGallery'];
    // Procesar imagen subida
    if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] == 0) {
        $finfo = new finfo(FILEINFO_MIME_TYPE);
        $realType = $finfo->file($_FILES['imagen']['tmp_name']);

        if ($_FILES['imagen']['size'] <= $maxSize && in_array($realType, $typeAllowed)) {
            $ext = pathinfo($_FILES['imagen']['name'], PATHINFO_EXTENSION);
            $fileName = uniqid() . '.' . $ext;
            $finalPath = $path . $fileName;

            if (move_uploaded_file($_FILES['imagen']['tmp_name'], $finalPath)) {
                echo "<script>
                    document.getElementById(\"uploadMsg\").innerText=\"Picture uploaded to server\";
                    document.getElementById(\"iconCheck\").style.display=\"inline\";
                </script>";
                $sql = "INSERT INTO images " .
                    "(idPerson, titleImage, descriptionImage, fileImage, inGallery) " . "VALUES " .
                    "('$artist','$title','$description', '$fileName', '$inGallery')";

                if ($conn->query($sql)) {
                    echo "<script>console.log('Image added to Gallery')</script>";
                }
            } else {
                echo "Error: can't move image file";
            }
        } else {
            echo "<div style=\"font-size:12px; color: red;\">Image doesn't reach specifications</div>";
        }
    } else {
        echo "<script>document.getElementById(\"uploadMsg\").innerText=\"Waiting for user actions...\"</script>";
    }
}


?>

</html>
<script>
    function getFileName(element) {
        console.log(element.files[0]["name"]);
        document.getElementById("picName").innerText = element.files[0]["name"];
    }

    function countChars(n) {
        //this function works with the div element id=progressBar, the class named fillBar and TextArea element
        //fillBar is a class with width property inicialized in 15%. Since TextArea has a maxwidth=200 characters
        //in order to get 100% of fill, it divide /2
        var len = n.length;
        var porc = Math.round(len / 2, 0);
        var bar = document.getElementById("progressBar");
        bar.innerText = len + " typed";
        if (len > 30) {
            bar.style.width = porc + "%"
        }
        if (len >= 200) {
            bar.innerText = "Limit reached!!!";
        }
    }
</script>