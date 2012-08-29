<?php
 /**
 * Example Application

 * @package Example-application
 */

require('libs/smarty/Smarty.class.php');

$smarty = new Smarty;



//$smarty->force_compile = true;
$smarty->debugging = FALSE;
$smarty->caching = true;
$smarty->cache_lifetime = 120;

  
//$smarty->display('aaa.tpl');

include "config.php";

if (!isset($_REQUEST['q']))
    $_REQUEST['q'] = "home";
if (in_array($_REQUEST['q'], $menu)) {
    $smarty->display($_REQUEST['q'] . ".tpl");    
} else {
    include "templates/error404.tpl";
    
}

?>
