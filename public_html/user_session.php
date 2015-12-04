<?php
/**
 * @version: 2015-12-2
 * @author: cylong
 * 获得用户session
 */
require "../config/smarty_init.php";

function get_name() {
    session_start();
    $name = "";
    if(isset($_SESSION["name"])) {
    	// 读取SESSION
    	$name = $_SESSION["name"];
    }
    return $name;
}

?>
