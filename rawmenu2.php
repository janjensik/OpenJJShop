<?php

include ("config.php");

foreach ($menu as $key => $link) 
      { 
        echo " ";
        echo "<span class=\"menu\"><a href=\"$link\"><span class=\"menu_font\">$key</span></a></span>";        
      } 

?>
