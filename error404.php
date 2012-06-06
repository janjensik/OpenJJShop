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
        <title>error404</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>      
    </head>
    <body>
        <?php
        include ("header_menu.php");
        include ("config.php");    
        ;?>
        <span><h3><p>Chyba 404</p><p>Stránka<i><?php echo " $_REQUEST[q] ";?></i>nenalezena</p></h3></span>

        
       <div style="clear: both"></div>
       <?php include ("footer.php");?>
             
    </body>
</html>


