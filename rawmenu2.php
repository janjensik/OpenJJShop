<?php

include ("config.php");

foreach ($menu as $key => $link) 
      { 
        echo " ";
        echo "<a href='$link'>";        
        echo $key;        
        echo"</a>";        
      } 

?>
