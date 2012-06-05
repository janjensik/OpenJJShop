<?xml version="1.0" encoding="UTF-8"?>
<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html 
     PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>table</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>      
    </head>
    <body>
         <?php include ("header_menu.php");?>        
         <table class="sample">
            <tr><td>obrazek</td><td>nazev</td><td>popis</td><td>cena</td></tr>
            
            <?php            
                include ("config.php");
              
                foreach ($zbozi as $sada) {                    
                        echo "<tr><td><img src=\"$img_dir/$sada[imgfile]\"width=\"256\" height=\"192\" alt=\"$sada[nazev]\"/></td><td>$sada[nazev]</td><td>$sada[popis]</td><td>$sada[cena]</td></tr>"; 
                }
            
            ?>
            
        </table>
        
        <?php include ("footer.php");?>
        
    </body>
</html>
