<?php
/**
 * @version: 2015-12-2
 * @author: cylong
 * 活动管理界面
 */
require "./common/user_session.php";
require "../config/smarty_init.php";
require "./common/common.php";
require "activity_data.php";

$username = get_username();
$name = get_name();
$avatar = get_avatar();

$tpl->assign("name", $name);
$tpl->assign("avatar", $avatar);

$error = get_error();
$tpl->assign("error", $error);

// 判断是否是管理员
$sql = "SELECT identity FROM user WHERE id = '$username'";
$res_iden = $db->execute_dql_arr($sql);
$identity = $res_iden[0]["identity"];
$add_activity = "";
$form_activity = "";
if($identity == 0) {  // 是管理员
    $add_activity .= "<li role=\"presentation\"><a href=\"#add\" data-toggle=\"tab\">活动发布</a></li>";
    $form_activity .= "<form action=\"add_activity.php\" method=\"post\">";
    $form_activity .= "<table class=\"add_activity\">";
    $form_activity .= "<tr>";
    $form_activity .= "<td class=\"first_col\">标题</td>";
    $form_activity .= "<td><input id=\"add_title\" name=\"title\" type=\"text\"/><span id=\"title_error\" class=\"error\">请输入标题</span></td>";
    $form_activity .= "</tr>";
    $form_activity .= "<tr>";
    $form_activity .= "<td class=\"first_col\">时间</td>";
    $form_activity .= "<td><input id=\"time\" name=\"time\" type=\"text\"/><span id=\"time_error\" class=\"error\">请输入时间</span></td>";
    $form_activity .= "</tr>";
    $form_activity .= "<tr>";
    $form_activity .= "<td class=\"first_col\">地点</td>";
    $form_activity .= "<td><input id=\"place\" name=\"place\" type=\"text\"/><span id=\"place_error\" class=\"error\">请输入地点</span></td>";
    $form_activity .= "</tr>";
    $form_activity .= "<tr>";
    $form_activity .= "<td class=\"first_col\" valign=\"top\">详细描述</td>";
    $form_activity .= "<td><textarea name=\"info\"></textarea></td>";
    $form_activity .= "</tr>";
    $form_activity .= "<tr>";
    $form_activity .= "<td class=\"first_col\"></td>";
    $form_activity .= "<td>";
    $form_activity .= "<input class=\"button pink\" type=\"submit\" onclick=\"return check_input()\" value=\"发布\" />";
    $form_activity .= "</td>";
    $form_activity .= "</tr>";
    $form_activity .= "</table>";
    $form_activity .= "</form>";
}
$tpl->assign("add_activity", $add_activity);
$tpl->assign("form_activity", $form_activity);

$activity_list = get_activity_list();
$tpl->assign("activity_list", $activity_list);

$tpl->display("activity.html");
?>
