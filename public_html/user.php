<?php
/**
 * @version: 2015-12-1
 * @author: cylong
 * 用户界面
 */
require_once "./common/user_session.php";
require_once "../config/smarty_init.php";
require_once "../config/db_config.php";
require_once "./class/DB.class.php";
require_once "./common/common.php";

$error = get_error();
$tpl->assign("error", $error);

$name = get_name();
$avatar = get_avatar();
$username = get_username();

$db = new DB();

$sql = "SELECT * FROM user WHERE id = '$username'";
$res = $db->execute_dql_arr($sql);
$docid = $res[0]["docid"];
$coaid = $res[0]["coaid"];

$doc_name = get_nameById($docid);
$coa_name = get_nameById($coaid);
$sex = $res[0]["sex"];
$goal = $res[0]["goal"];
$identity = $res[0]["identity"];
$motto = $res[0]["motto"];


$tpl->assign("name", $name);
$tpl->assign("avatar", $avatar);
$tpl->assign("sex", $sex);
$tpl->assign("goal", $goal);
$tpl->assign("identity", $identity);
$tpl->assign("doc_name", $doc_name);
$tpl->assign("coa_name", $coa_name);
$tpl->assign("motto", $motto);
$tpl->display("user.html");

// 通过id查找name
function get_nameById($id) {
    global $db;
    $sql = "SELECT * FROM user WHERE id = '$id'";
    $res = $db->execute_dql_arr($sql);
    if($res) {
        $name = $res[0]["name"];
        if(empty($name)) {
            $name = $res[0]["id"];
        }
        return $name;
    } else {
        return "无";
    }
}

?>
