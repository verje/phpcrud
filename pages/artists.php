<?php
$imagesArray = array(
    ["https://images.pexels.com/photos/1803878/pexels-photo-1803878.jpeg?auto=compress&cs=tinysrgb&w=600", "Jhon Geller", "Lorem sdfjnsfjnsdjkfn sdkfnskodnfks iksnfnsdf skdlfnosndfjksndfn skdfnskfndsf1"],
    ["https://images.pexels.com/photos/2192239/pexels-photo-2192239.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1", "Brett Sayles", "Lorem sdfjnsfjnsdjkfn sdkfnskodnfks iksnfnsdf skdlfnosndfjksndfn skdfnskfndsf1"],
    ["https://images.unsplash.com/photo-1628802634987-56dcd0de35e6?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fHRhdHRvbyUyMGFydGlzdHxlbnwwfHwwfHx8MA%3D%3D", "Kadin Pierce", "Lorem sdfjnsfjnsdjkfn sdkfnskodnfks iksnfnsdf skdlfnosndfjksndfn skdfnskfndsf1"],
    ["https://images.unsplash.com/photo-1485463598028-44d6c47bf23f?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fHRhdHRvbyUyMGFydGlzdHxlbnwwfHwwfHx8MA%3D%3D", "Mariah Faruque", "Lorem sdfjnsfjnsdjkfn sdkfnskodnfks iksnfnsdf skdlfnosndfjksndfn skdfnskfndsf1"],
);
?>
<div>
    <h1>Masters Artists</h1>
</div>       
<div class="cardContainer">
<?php foreach($imagesArray as $imgArray){?>
        <div class="cardArtist">
            <div class="cardImg">
                <img src="<?php echo $imgArray[0] ?>">
            </div>
            <div class="detailsImg">
                <div class="cardTitle">
                    <h3><?php echo $imgArray[1] ?></h3>
                </div>
                <div class="cardDescription">
                    <span><?php echo $imgArray[2] ?></span>
                </div>  
            </div>
      
        </div>
        
    <?php } ?>
</div>