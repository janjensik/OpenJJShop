<?php include "config.php";?>

<div style="padding-top:1px; height: 160px; background-color: #00AEED; border-radius: 10px;"><p style="margin-left: 250px; font-family: serif; font-size: 40px; color: white;">OpenJJShop</p>
             
            <span style="margin-left: 30px;">           
            <?php

foreach ($menu as $key => $page) 
      { ?>
        <span class="menu"><a href="<?php echo "index.php?q=$page";?>"><span class="menu_font"><?php echo $key;?></span></a></span> 
        <?php
      } 

?>
            </span>
        </div>
