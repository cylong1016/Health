<?php
/**
 * @version: 2015-12-1
 * @author: cylong
 * 用户界面
 */
require "../config/smarty_init.php";

session_start();
$name = "";
if(isset($_SESSION["name"])) {
	// 读取SESSION
	$name = $_SESSION["name"];
}

$tpl->assign("name", $name);
$tpl->display("user.html");
?>
