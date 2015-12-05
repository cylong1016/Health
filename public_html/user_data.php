<?php
/**
 * @version: 2015-12-1
 * @author: cylong
 * 用户数据界面
 */

require_once "../config/db_config.php";
require_once "./class/DB.class.php";

$db = new DB();

// 获得今天的用户数据，应该根据user_id获得，此时所有用户通用一个文件
function get_today_data() {
    $file_name = "./data/user_health.xml";
    $data_arr = array();
    if(file_exists($file_name)){
        $xml_array = simplexml_load_file($file_name);
        foreach($xml_array as $tmp){    // 只取一条数据
            $h = $data_arr["height"] = $tmp->height;
            $w = $data_arr["weight"] = $tmp->weight;
            $data_arr["bmi"] = number_format($w * 1.0 / ($h * $h / 10000), 2, '.', '');
            $data_arr["hr"] = $tmp->hr;
            $data_arr["bph"] = $tmp->bph;
            $data_arr["bpl"] = $tmp->bpl;
            $data_arr["goal"] = $tmp->goal;
        	break;
        }
    }
    return $data_arr;
}

// 获得用户最近的数据
function get_recent_data($day) {
    $file_name = "./data/user_health.xml";
    $recent_arr = array();
    if(file_exists($file_name)){
        $xml_array = simplexml_load_file($file_name);
        $i = 0;
        foreach($xml_array as $tmp){    // 只取一条数据
            $h = $recent_arr["height"][$i] = $tmp->height;
            $w = $recent_arr["weight"][$i] = $tmp->weight;
            $recent_arr["bmi"][$i] = number_format($w * 1.0 / ($h * $h / 10000), 2, '.', '');
            $recent_arr["hr"][$i] = $tmp->hr;
            $recent_arr["bph"][$i] = $tmp->bph;
            $recent_arr["bpl"][$i] = $tmp->bpl;
            $recent_arr["goal"][$i] = $tmp->goal;
            $i++;
            if($i >= $day) {
                break;
            }
        }
    }
    return $data_arr;
}

// 获得该医生或者教练的监督用户
function get_myuser_info($id) {
    global $db;
    $sql = "SELECT * FROM user WHERE docid = '$id' OR coaid = '$id'";
    $res = $db->execute_dql_arr($sql);
    return $res;
}

// 包涵总距离和总时间的数组
function get_total_run($id) {
    global $db;
    $sql = "SELECT run_time, run_distance FROM user WHERE id = '$id'";
    $res = $db->execute_dql_arr($sql);
    $total_run["time"] = $res[0]["run_time"];
    $total_run["distance"] = $res[0]["run_distance"];
    return $total_run;
}

// 获得用户身份
function get_user_iden($id) {
    global $db;
    $sql = "SELECT identity FROM user WHERE id = '$id'";
    $res_iden = $db->execute_dql_arr($sql);
    $identity = $res_iden[0]["identity"];
    return $identity;
}

// 获得医生建议
function get_advice_from_doc($id) {
    global $db;
    $sql = "SELECT * FROM d_feed_back, user WHERE d_feed_back.uid = '$id' AND d_feed_back.docid = user.id";
    $res = $db->execute_dql_arr($sql);
    return $res;
}

// 获得教练建议
function get_advice_from_coa($id) {
    global $db;
    $sql = "SELECT * FROM c_feed_back, user WHERE c_feed_back.uid = '$id' AND c_feed_back.coaid = user.id";
    $res = $db->execute_dql_arr($sql);
    return $res;
}

?>
