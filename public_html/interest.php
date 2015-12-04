<?php
/**
 * @version: 2015-12-1
 * @author: cylong
 * 兴趣组界面
 */
require "user_session.php";

$name = get_name();
$tpl->assign("name", $name);
$tpl->display("interest.html");
?>
