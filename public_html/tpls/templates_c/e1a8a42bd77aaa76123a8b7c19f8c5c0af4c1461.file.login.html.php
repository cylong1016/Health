<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-03 18:23:46
         compiled from "..\public_html\tpls\templates\login.html" */ ?>
<?php /*%%SmartyHeaderCode:829156605744cb27e4-69235921%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1a8a42bd77aaa76123a8b7c19f8c5c0af4c1461' => 
    array (
      0 => '..\\public_html\\tpls\\templates\\login.html',
      1 => 1449163425,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '829156605744cb27e4-69235921',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56605744cda389_19750901',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56605744cda389_19750901')) {function content_56605744cda389_19750901($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
					<form class="login active" action="login_handle.php" method="post">
						<h3>登陆</h3>
						<div>
							<label>用户名：</label>
							<input id="username" type="text" name="username"/>
                            <span id="username_error" class="error">请输入用户名</span>
						</div>
						<div>
							<label>密码：<a href="forgot_password.html" rel="forgot_password" class="forgot linkform">忘记密码？</a></label>
							<input id="password" type="password" name="password"/>
                            <span id = "password_error" class="error">请输入密码</span>
						</div>
						<div class="bottom">
							<div class="remember"><input type="checkbox" name="save_pass" value="true" checked /><span>保持登陆</span></div>
							<input class="button pink" type="submit" onclick="return check_input()" value="登陆">
							<a href="register.php" rel="register">你还没有账户？点此注册</a>
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
        if(error == 2) {
            var username_error = document.getElementById("username_error");
            username_error.innerHTML = "用户名或密码错误";
            username_error.style.visibility = "visible";
        } else {
            username_error.innerHTML = "请输入用户名";
            username_error.style.visibility = "hidden";
        }

        // 检查输入是否合法
        function check_input() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            var username_error = document.getElementById("username_error");
            var password_error = document.getElementById("password_error");
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
            return skip;
        }
    <?php echo '</script'; ?>
>
</html>
<?php }} ?>
