<?php
/**
 * @version: 2015-12-2
 * @author: cylong
 * 用户基本信息修改
 */
require "../config/db_config.php";
require "./class/DB.class.php";
require "./common/user_session.php";
require "../config/smarty_init.php";

$username = get_username();
$name = $_POST["name"];
$gender = $_POST["gender"];
$goal = $_POST["goal"];
$identity = $_POST["identity"];
$doctor = $_POST["doctor"];
$coach = $_POST["coach"];
$motto = $_POST["motto"];

$db = new DB();
$bool = check_name($db, $name);     // 检查用户昵称是否重复
if($bool) {
    header("Location: user.php?error=1");   // 1代表用户名重复
	exit();
} else {
    $sql = "UPDATE user SET name='$name', sex='$gender', goal='$goal', identity='$identity', motto='$motto' WHERE id = '$username'";
    $db->execute_dml($sql);
    $_SESSION["name"] = $name;
    header("Location: user.php?error=2");   // 2代表修改成功
	exit();
}

function check_name($db, $name) {
    $sql = "SELECT * FROM user WHERE name='$name'";
    $res = $db->execute_dql_arr($sql);
    if($res) {
        $cur_name = get_name();
        if($cur_name == $res[0]["name"]) {  // 就是用户当前的名字
            return false;
        }
        return true;
    }
    return false;
}
?>
