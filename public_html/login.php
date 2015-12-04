<?php
require_once "../config/smarty_init.php";

$error = get_error();
$tpl->assign("error", $error);

$tpl->display("login.html");

function get_error() {
    $error = 0; // 正常
    // 接收错误编号
    if(!empty($_GET['error'])) {
        $error = $_GET['error'];
    }
    return $error;
}
?>
