<?php
$imagesArray = array(
    ["https://images.pexels.com/photos/2183131/pexels-photo-2183131.jpeg?auto=compress&cs=tinysrgb&w=600", "Arms of power", "In this tatto, the artist shows his entire soul. His inspiration is his own chilhood and dreams to get higher in life. This tattoo is for all people who doesn´t stop dreaming"],
    ["https://images.pexels.com/photos/2089926/pexels-photo-2089926.jpeg?auto=compress&cs=tinysrgb&w=600", "Bird Back", "Some people always enjoy get a big and black bird in their back shoulders. Most of them, think that This tatto express the deepest and darkest whises that people never dare to say"],
    ["https://images.pexels.com/photos/2183132/pexels-photo-2183132.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=3", "Titulo 1", "Lorem sdfjnsfjnsdjkfn sdkfnskodnfks iksnfnsdf skdlfnosndfjksndfn skdfnskfndsf1"],
    ["https://images.pexels.com/photos/2192237/pexels-photo-2192237.jpeg?auto=compress&cs=tinysrgb&w=600", "Titulo 4", "Lorem sdfjnsfjnsdjkfn sdkfnskodnfks iksnfnsdf skdlfnosndfjksndfn skdfnskfndsf1"],
    ["https://images.pexels.com/photos/2200913/pexels-photo-2200913.jpeg?auto=compress&cs=tinysrgb&w=600", "Titulo 5", "Lorem sdfjnsfjnsdjkfn sdkfnskodnfks iksnfnsdf skdlfnosndfjksndfn skdfnskfndsf1"],
    ["https://images.pexels.com/photos/2231633/pexels-photo-2231633.jpeg?auto=compress&cs=tinysrgb&w=600", "Titulo 6", "Lorem sdfjnsfjnsdjkfn sdkfnskodnfks iksnfnsdf skdlfnosndfjksndfn skdfnskfndsf1"],
    ["https://images.unsplash.com/photo-1589740986324-21787c70129f?q=80&w=1960&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D", "Titulo 7", "Lorem ipsum dsjfbs oñsidnfs foidsfk sdfnsdnfsold olsidjflsndflnsdfnsod"],
    ["https://images.unsplash.com/photo-1598371839696-5c5bb00bdc28?q=80&w=1947&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D", "Titulo 8", "Lorem ipsum dsjfbs oñsidnfs foidsfk sdfnsdnfsold olsidjflsndflnsdfnsod"],
    ["https://images.pexels.com/photos/2183131/pexels-photo-2183131.jpeg?auto=compress&cs=tinysrgb&w=600", "Arms of power", "In this tatto, the artist shows his entire soul. His inspiration is his own chilhood and dreams to get higher in life. This tattoo is for all people who doesn´t stop dreaming"],
    ["https://images.pexels.com/photos/2089926/pexels-photo-2089926.jpeg?auto=compress&cs=tinysrgb&w=600", "Bird Back", "Some people always enjoy get a big and black bird in their back shoulders. Most of them, think that This tatto express the deepest and darkest whises that people never dare to say"],
    ["https://images.pexels.com/photos/2183132/pexels-photo-2183132.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=3", "Titulo 1", "Lorem sdfjnsfjnsdjkfn sdkfnskodnfks iksnfnsdf skdlfnosndfjksndfn skdfnskfndsf1"],
    ["https://images.pexels.com/photos/2192237/pexels-photo-2192237.jpeg?auto=compress&cs=tinysrgb&w=600", "Titulo 4", "Lorem sdfjnsfjnsdjkfn sdkfnskodnfks iksnfnsdf skdlfnosndfjksndfn skdfnskfndsf1"],
    ["https://images.pexels.com/photos/2200913/pexels-photo-2200913.jpeg?auto=compress&cs=tinysrgb&w=600", "Titulo 5", "Lorem sdfjnsfjnsdjkfn sdkfnskodnfks iksnfnsdf skdlfnosndfjksndfn skdfnskfndsf1"],
    ["https://images.pexels.com/photos/2231633/pexels-photo-2231633.jpeg?auto=compress&cs=tinysrgb&w=600", "Titulo 6", "Lorem sdfjnsfjnsdjkfn sdkfnskodnfks iksnfnsdf skdlfnosndfjksndfn skdfnskfndsf1"],
    ["https://images.unsplash.com/photo-1589740986324-21787c70129f?q=80&w=1960&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D", "Titulo 7", "Lorem ipsum dsjfbs oñsidnfs foidsfk sdfnsdnfsold olsidjflsndflnsdfnsod"],
    ["https://images.unsplash.com/photo-1598371839696-5c5bb00bdc28?q=80&w=1947&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D", "Titulo 8", "Lorem ipsum dsjfbs oñsidnfs foidsfk sdfnsdnfsold olsidjflsndflnsdfnsod"],
);
?>
<div style="padding-block: 20px;">
    <h1 style="color: var(--myBlack)">Pictures of our tattoes</h1>
</div>
<div class="cardContainerGrid">
    <?php
    $cont = 0;
    foreach ($imagesArray as $imgArray) {?>
        <div class="topCardContainer">
            <div class="cardImageContainer">
                <img src="<?php echo $imgArray[0] ?>">
            </div>
            <div class="cardContainerChild">
                <div style="text-align: left;">
                    <i class="fa-solid fa-arrow-up-right-from-square fa-rotate-90" style="color: white; padding: 3px; font-size: 10px"></i>
                </div>
               
                <div style="padding: 10px;">
                    <h2 style="color: white; padding-bottom: 10px"><?php echo $imgArray[1] ?></h2>
                    <div class="cardTextContainer"><?php echo $imgArray[2] ?></div>
                    <div class="iconsCard">
                        <div><i class="fa-regular fa-images" style="color:white;"></i></div>
                        <div><i class="fa-regular fa-pen-to-square" style="color:white;"></i></div>
                        <div><i class="fa-regular fa-trash-can" style="color:var(--myRed);"></i></div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>
