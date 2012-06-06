<?php
include ("config.php");

if (!isset($_REQUEST['q'])) $_REQUEST['q'] = "home";
if (in_array($_REQUEST['q'],$menu)) {
   include($_REQUEST['q'].".php");
}
 else {
   include ("eror404.php"); 
}
?>