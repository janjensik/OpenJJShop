<?xml version = "1.0" encoding = "UTF-8"?>

<!DOCTYPE html 
    PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>        
        <link rel="stylesheet" type="text/css" href="style.css"/>      
    </head>
    <body>
        

        <div class="header"><p class="logo_design"><a class="logo" href="index.php">OpenJJShop</a></p>

            <span style="margin-left: 30px;">      
               
          <ul>
               {foreach from=$menu  key=name item=link}
             <span class="menu"><a class="menu_odkaz" href="index.php?q={$link}"><span class="menu_font">{$name}</span></a></span>
            {/foreach}
           </ul>
            </span>
        </div>

    </body>
</html>