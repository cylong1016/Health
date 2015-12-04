<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-04 11:27:45
         compiled from "..\public_html\tpls\templates\user.html" */ ?>
<?php /*%%SmartyHeaderCode:168625660623091f487-39907819%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f94fecf761ed2f6850e2fd7cb4b2ce782a6dbec' => 
    array (
      0 => '..\\public_html\\tpls\\templates\\user.html',
      1 => 1449221768,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '168625660623091f487-39907819',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56606230952af2_97872161',
  'variables' => 
  array (
    'name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56606230952af2_97872161')) {function content_56606230952af2_97872161($_smarty_tpl) {?><!-- 作者：陈云龙 -->
<!-- 时间：2015-10-31 -->
<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<title>健康专家</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap-modify.css" rel="stylesheet">
	<link href="css/user.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<?php echo '<script'; ?>
 src="http://apps.bdimg.com/libs/jquery/2.0.0/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/bootstrap.js"><?php echo '</script'; ?>
>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="navbar-header">
		<a class="navbar-brand" href="index.php">健康专家</a>
	</div>
	<div class="nav-center">
		<ul class="nav navbar-nav">
			<li><a href="index.php">首页 </i></a></li>
			<li><a href="race.php">竞赛 </a></li>
			<li><a href="activity.php">活动 </a></li>
			<li><a href="interest.php">兴趣组 </a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#"><img class="avater" src="images/avater.jpg"> <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 <b class="caret"></b></a>
				<ul role="menu" class="dropdown-menu">
					<li><a href="user.php">我的主页</a></li>
					<li><a href="#">个人资料</a></li>
					<li><a href="#">我的好友</a></li>
					<li><a href="#">我的账户</a></li>
					<li class="divider"></li>
					<li><a href="#">退出登录</a></li>
				</ul>
			</li>
			<li><a href="#">
				<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a>
			</li>
		</ul>
	</div>
</nav>
<div class="container box">
	<ul class="nav nav-tabs nav-stacked sidebar">
		<li role="presentation" class="active"><a href="#news" data-toggle="tab">我的动态</a></li>
		<li role="presentation"><a href="#profile" data-toggle="tab">个人资料</a></li>
		<li role="presentation"><a href="#friends" data-toggle="tab">我的好友</a></li>
		<li role="presentation"><a href="#account" data-toggle="tab">我的账户</a></li>
		<li role="presentation"><a href="#notify" data-toggle="tab">消息盒子</a></li>
	</ul>
	<div id="avater">
		<img src="images/avater.jpg">
		<br><br>
		<a href="user.php">笑话人生cylong</a>
	</div>
	<div class="tab-content">
		<!-- 我的动态 -->
		<div class="tab-pane fade in active" id="news">
			<div class="content">
				<img class="item-avater" src="images/avater.jpg"><span class="item-name">笑话人生cylong</span>
				<span class="item-date">10-28 23:24:45</span>
				<div class="item-content">哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈，
				哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈</div>
			</div>
			<div class="content">
				<img class="item-avater" src="images/avater.jpg"><span class="item-name">笑话人生cylong</span>
				<span class="item-date">10-29 13:24:45</span>
				<div class="item-content">秋天的主旋律可以是美景、好身材，但绝对不能是秋膘和肉肉！
				所以想减肥、塑形、增肌的亲们，快快进入我们的“跟着私教甩秋膘”专题get新技能吧~这个秋天，跟着名教一起，疯狂的甩秋膘！！！</div>
			</div>
		</div>
		<!-- 个人资料 -->
		<div class="tab-pane fade" id="profile">
			<div class="content">
				<form class="" action="" method="post">
					<table class="profile_list">
						<tr>
			   				<td class="first_col">昵称</td>
			   				<td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"/></td>
						</tr>
						<tr>
				   			<td class="first_col">性别</td>
				   			<td>
								<input name="gender" type="radio" value="0">&nbsp;女</input> &nbsp;
								<input name="gender" type="radio" value="1" checked='checked'>&nbsp;男</input>
							</td>
						</tr>
						<tr>
				   			<td class="first_col">本周目标</td>
				   			<td><input type="text" value="30"/>&nbsp;公里</td>
						</tr>
						<tr>
				   			<td class="first_col">身份</td>
				   			<td>
								<input name="identity" type="radio" value="1">&nbsp;普通用户</input> &nbsp;
								<input name="identity" type="radio" value="2" checked='checked'>&nbsp;医生</input> &nbsp;
								<input name="identity" type="radio" value="3" checked='checked'>&nbsp;教练</input>
							</td>
						</tr>
						<tr>
				   			<td class="first_col">监督医生</td>
				   			<td><input type="text" value="lsy"/></td>
						</tr>
						<tr>
				   			<td class="first_col">贴身教练</td>
				   			<td><input type="text" value="lsy"/></td>
						</tr>
						<tr>
				   			<td class="first_col">座右铭</td>
				   			<td><textarea></textarea></td>
						</tr>
						<tr>
				   			<td class="first_col"></td>
				   			<td><input class="button pink" type="submit" value="保存" /></td>
						</tr>
					</table>
				</form>
			</div>
		</div>
		<!-- 我的好友 -->
		<div class="tab-pane fade" id="friends">
		我的好友
		</div>
		<!-- 我的账户 -->
		<div class="tab-pane fade" id="account">
		我的账户
		</div>
		<!-- 消息盒子 -->
		<div class="tab-pane fade" id="notify">
		消息盒子
		</div>
	</div>
</div>
</body>
</html>
<?php }} ?>
