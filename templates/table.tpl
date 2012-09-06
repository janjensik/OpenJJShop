<?xml version = "1.0" encoding = "UTF-8"?>

<!DOCTYPE html 
    PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
    <head>
        <title>table</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>      
    </head>
    <body>               
        <table class="sample">
            <tr><td>obrázek</td><td>název</td><td>popis</td><td>cena</td></tr>

           {foreach from=$zbozi key=key item=item}
               <tr><td><img src="{$img_dir}/{$item.imgfile}" width="256" height="192" alt="{$item.nazev}" </img><td>{$item.nazev}</td><td>{$item.popis}</td><td>{$item.cena}</td></tr>
           {/foreach}
                     
        </table>       

    </body>
</html>
