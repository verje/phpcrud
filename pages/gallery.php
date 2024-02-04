<?php
$imagesArray = array(
    ["https://images.pexels.com/photos/2183131/pexels-photo-2183131.jpeg?auto=compress&cs=tinysrgb&w=600", "Titulo 1", "Lorem sdfjnsfjnsdjkfn sdkfnskodnfks iksnfnsdf skdlfnosndfjksndfn skdfnskfndsf1"],
    ["https://images.pexels.com/photos/2089926/pexels-photo-2089926.jpeg?auto=compress&cs=tinysrgb&w=600", "Titulo 2", "Lorem sdfjnsfjnsdjkfn sdkfnskodnfks iksnfnsdf skdlfnosndfjksndfn skdfnskfndsf1"],
    ["https://images.pexels.com/photos/2183132/pexels-photo-2183132.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=3", "Titulo 1", "Lorem sdfjnsfjnsdjkfn sdkfnskodnfks iksnfnsdf skdlfnosndfjksndfn skdfnskfndsf1"],
    ["https://images.pexels.com/photos/2192237/pexels-photo-2192237.jpeg?auto=compress&cs=tinysrgb&w=600", "Titulo 4", "Lorem sdfjnsfjnsdjkfn sdkfnskodnfks iksnfnsdf skdlfnosndfjksndfn skdfnskfndsf1"],
    ["https://images.pexels.com/photos/2200913/pexels-photo-2200913.jpeg?auto=compress&cs=tinysrgb&w=600", "Titulo 5", "Lorem sdfjnsfjnsdjkfn sdkfnskodnfks iksnfnsdf skdlfnosndfjksndfn skdfnskfndsf1"],
    ["https://images.pexels.com/photos/2231633/pexels-photo-2231633.jpeg?auto=compress&cs=tinysrgb&w=600", "Titulo 6", "Lorem sdfjnsfjnsdjkfn sdkfnskodnfks iksnfnsdf skdlfnosndfjksndfn skdfnskfndsf1"],    
    ["https://images.unsplash.com/photo-1589740986324-21787c70129f?q=80&w=1960&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D","Titulo 7", "Lorem ipsum dsjfbs oñsidnfs foidsfk sdfnsdnfsold olsidjflsndflnsdfnsod"],
    ["https://images.unsplash.com/photo-1598371839696-5c5bb00bdc28?q=80&w=1947&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D","Titulo 8", "Lorem ipsum dsjfbs oñsidnfs foidsfk sdfnsdnfsold olsidjflsndflnsdfnsod"],

);
?>
<div>
    <h1>Our Tattoo Gallery</h1>
</div>       
<div class="cardContainer">
<?php foreach($imagesArray as $imgArray){?>
        <div class="card">
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



