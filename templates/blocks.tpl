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
        {include file='header_menu.tpl'} 
       

       <ul>
           {foreach from=$zbozi key=key item=item} 
               
             <div class="blok"><p><img src="{$img_dir}/{$item.imgfile}" width="256" height="192" alt="{$item.nazev}"></img></p><p>{$item.nazev} {$item.cena}</p></div>            
            {/foreach}
           </ul>

        <div style="clear: both"></div>
        {include file='footer.tpl'}

    </body>
</html>
