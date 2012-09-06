<?php
 /**
 * Example Application

 * @package Example-application
 */

require('libs/smarty/Smarty.class.php');

$smarty = new Smarty;



//$smarty->force_compile = true;
$smarty->debugging = FALSE;
$smarty->caching = FALSE;
$smarty->cache_lifetime = 120;

include "config.php";

if (!isset($_REQUEST['q']))
    $_REQUEST['q'] = "home";
    
if (in_array($_REQUEST['q'], $menu)){
$smarty->assign("page", $_REQUEST['q']);
$smarty->display("layout.tpl");
$smarty->clearCache("page", $_REQUEST['q']);
}
?>
