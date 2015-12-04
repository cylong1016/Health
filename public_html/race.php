<?php
/**
 * @version: 2015-12-1
 * @author: cylong
 * 竞赛界面
 */
require "user_session.php";

$name = get_name();
$tpl->assign("name", $name);
$tpl->display("race.html");
?>
