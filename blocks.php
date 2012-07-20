<?xml version = "1.0" encoding = "UTF-8"?>

<!DOCTYPE html 
    PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>blocks</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>      
    </head>
    <body>
        <?php
        include "header_menu.php";
        include "config.php";

        foreach ($zbozi as $sada) {
            ?>
            <div class="blok"><p><img src=<?php echo "$img_dir/$sada[imgfile]" ?> width="256" height="192" alt=<?php "$sada[nazev]" ?>/></p><p><?php echo "$sada[cena]" ?></p></div>
            <?php
        }
        ;
        ?>

        <div style="clear: both"></div>
        <?php include "footer.php"; ?>

    </body>
</html>
