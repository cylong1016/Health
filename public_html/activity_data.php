<?php
/**
 * @version: 2015-12-1
 * @author: cylong
 * 读取activity数据
 */
require "../config/db_config.php";
require "./class/DB.class.php";

$db = new DB();

// 全部活动
function get_activity_list() {
    global $db;
    $sql = "SELECT * FROM activity";
    $activity_list = $db->execute_dql_arr($sql);
    return $activity_list;
}

// id用户参加的活动
function get_activity_by_id($id) {
    global $db;
    $sql = "SELECT DISTINCT * FROM user_activity, activity WHERE activity.id = user_activity.aid AND user_activity.uid = '$id'";
    $activity_list = $db->execute_dql_arr($sql);
    return $activity_list;
}

?>