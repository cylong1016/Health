<?php
require "../config/smarty_init.php";
require "./common/common.php";

$error = get_error();
$tpl->assign("error", $error);

$tpl->display("login.html");

?>
