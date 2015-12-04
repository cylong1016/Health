<?php
/**
 * @version: 2015-12-2
 * @author: cylong
 * 活动管理界面
 */
require "user_session.php";

$name = get_name();
$tpl->assign("name", $name);
$tpl->display("activity.html");
?>
