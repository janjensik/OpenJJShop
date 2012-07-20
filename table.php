<? xml version = "1.0" encoding = "UTF-8" ?>

<!DOCTYPE html 
    PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>table</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>      
    </head>
    <body>
        <?php include "header_menu.php"; ?>        
        <table class="sample">
            <tr><td>obrazek</td><td>nazev</td><td>popis</td><td>cena</td></tr>

            <?php
            include "config.php";

            foreach ($zbozi as $sada) {
                ?>
                <tr><td><img src="<?php echo "$img_dir/$sada[imgfile]"; ?> "width="256" height="192" alt="<?php echo "$sada[nazev]"; ?>"/></td><td><?php echo "$sada[nazev]"; ?></td><td><?php echo "$sada[popis]"; ?></td><td><?php echo "$sada[cena]"; ?></td></tr>
                <?php
            }
            ?>

        </table>

        <?php include "footer.php"; ?>

    </body>
</html>
