<?php
/**
 * @version: 2015-12-1
 * @author: cylong
 * 首页面
 */
require "../config/smarty_init.php";

session_start();
$name = "";
if(isset($_SESSION["name"])) {
	// 读取昵称
	$name = $_SESSION["name"];
}

$tpl->assign("name", $name);
$tpl->display("index.html");
?>
