<?xml version = "1.0" encoding = "UTF-8"?>

<!DOCTYPE html 
    PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>error404</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>      
    </head>
    <body>
        {include file='header_menu.tpl'}
        <span class="header"><p>Chyba 404</p><p>Stránka<i>{$REQUEST[q]}</i>nenalezena</p></span>


        <div style="clear: both"></div>
        {include file='footer.tpl'}
    </body>
</html>
