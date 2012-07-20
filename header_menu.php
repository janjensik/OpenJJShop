<? xml version = "1.0" encoding = "UTF-8" ?>

<!DOCTYPE html 
    PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>        
        <link rel="stylesheet" type="text/css" href="style.css"/>      
    </head>
    <body>
        <?php include "config.php"; ?>

        <div class="header"><p class="logo_design"><a class="logo" href="index.php">OpenJJShop</a></p>

            <span style="margin-left: 30px;">           
                <?php
                foreach ($menu as $key => $page) {
                    ?>
                    <span class="menu"><a class="menu_odkaz" href="<?php echo "index.php?q=$page"; ?>"><span class="menu_font"><?php echo $key; ?></span></a></span> 
                    <?php
                }
                ?>
            </span>
        </div>

    </body>
</html>