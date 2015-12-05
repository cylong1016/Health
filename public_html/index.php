<?php
/**
 * @version: 2015-12-1
 * @author: cylong
 * 首页面
 */
require "./common/user_session.php";
require "../config/smarty_init.php";

$name = get_name();
$avatar = get_avatar();

$tpl->assign("name", $name);
$tpl->assign("avatar", $avatar);
$tpl->display("index.html");
?>
