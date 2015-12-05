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

?>
