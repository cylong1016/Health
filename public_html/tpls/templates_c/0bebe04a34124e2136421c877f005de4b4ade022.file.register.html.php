<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-03 18:23:54
         compiled from "..\public_html\tpls\templates\register.html" */ ?>
<?php /*%%SmartyHeaderCode:17787566043c07d22d3-08081498%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0bebe04a34124e2136421c877f005de4b4ade022' => 
    array (
      0 => '..\\public_html\\tpls\\templates\\register.html',
      1 => 1449163432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17787566043c07d22d3-08081498',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_566043c0811837_88108053',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566043c0811837_88108053')) {function content_566043c0811837_88108053($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>喵喵运动社区</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    <body>
		<div class="wrapper">
			<h1>喵喵运动社区</h1>
			<h2>给你不一样的健康体验</h2>
			<div class="content">
				<div id="form_wrapper" class="form_wrapper">
					<form class="register active" action="register_handle.php" method="post">
						<h3>注册</h3>
						<div>
							<label>用户名：</label>
							<input id="username" type="text" name="username"/>
                            <span id="username_error" class="error">请输入用户名</span>
						</div>
						<div>
							<label>密码：</label>
							<input id="password" type="password" name="password"/>
                            <span id="password_error" class="error">请输入密码</span>
						</div>
						<div>
							<label>确认密码：</label>
							<input id="pass_confirm" type="password" name="pass_confirm"/>
                            <span id="pass_confirm_error" class="error">两次输入的密码不同</span>
						</div>
						<div class="bottom">
							<input class="button pink" type="submit" onclick="return check_input()" value="注册" />
							<a href="login.php" rel="login" class="linkform">你已经有账户了？点此登陆</a>
							<div class="clear"></div>
						</div>
					</form>
				</div>
				<div class="clear"></div>
			</div>
		</div>
    </body>
    <?php echo '<script'; ?>
>
        var error = <?php echo $_smarty_tpl->tpl_vars['error']->value;?>
;
        if(error == 1) {
            var username_error = document.getElementById("username_error");
            username_error.innerHTML = "用户名重复";
            username_error.style.visibility = "visible";
        } else {
            username_error.innerHTML = "请输入用户名";
            username_error.style.visibility = "hidden";
        }

        // 检查输入是否合法
        function check_input() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            var pass_confirm = document.getElementById("pass_confirm").value;
            var username_error = document.getElementById("username_error");
            var password_error = document.getElementById("password_error");
            var pass_confirm_error = document.getElementById("pass_confirm_error");
            var skip = true; // 是否跳转
            if(username.length == 0) {
                username_error.style.visibility = "visible";
                username_error.innerHTML = "请输入用户名";
                skip = false;
            } else {
                username_error.style.visibility = "hidden";
            }

            if(password.length == 0) {
                password_error.style.visibility = "visible";
                skip = false;
            } else {
                password_error.style.visibility = "hidden";
            }

            if(pass_confirm.length == 0 || pass_confirm != password) {
                pass_confirm_error.style.visibility = "visible";
                skip = false;
            } else {
                pass_confirm_error.style.visibility = "hidden";
            }

            return skip;
        }
    <?php echo '</script'; ?>
>
</html>
<?php }} ?>
