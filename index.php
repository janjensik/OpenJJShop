<?php

include "config.php";
include "header_menu.php";
if (!isset($_REQUEST['q']))
    $_REQUEST['q'] = "home";
if (in_array($_REQUEST['q'], $menu)) {
    include($_REQUEST['q'] . ".php");
} else {
    include "error404.php";
}

include "footer.php";
?>
