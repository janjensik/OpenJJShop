<?php

if (!isset($_REQUEST['q'])) $_REQUEST['q'] = "home";
include $_REQUEST['q'].".php";

?>
