<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-04 11:27:26
         compiled from "..\public_html\tpls\templates\activity.html" */ ?>
<?php /*%%SmartyHeaderCode:2719556615a3318ca89-82259482%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7781a4f87cbc54d2d1abff1e0b672b8a2859952f' => 
    array (
      0 => '..\\public_html\\tpls\\templates\\activity.html',
      1 => 1449224844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2719556615a3318ca89-82259482',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56615a331b1470_24100989',
  'variables' => 
  array (
    'name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56615a331b1470_24100989')) {function content_56615a331b1470_24100989($_smarty_tpl) {?><!-- 作者：陈云龙 -->
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
	<link href="css/activity.css" rel="stylesheet">
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
			<li class="active"><a href="activity.php">活动 </a></li>
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
		<li role="presentation" class="active"><a href="#recommend" data-toggle="tab">活动推荐</a></li>
		<li role="presentation"><a href="#all" data-toggle="tab">全部活动</span></a></li>
		<li role="presentation"><a href="#participate" data-toggle="tab">我参与的</a></li>
		<li role="presentation"><a href="#history" data-toggle="tab">历史活动</a></li>
	</ul>
	<div class="tab-content">
		<!-- 活动推荐 -->
		<div class="tab-pane fade in active" id="recommend">
			<div class="content">
				<input class="button pink" type="submit" value="参加" />
				<div class="title">一起来爬山吧</div>
				<div class="info">
					<div class="time"><span>时间：</span>2015-12-20</div>
					<div class="place"><span>地点：</span>紫金山</div>
					<div class="num"><span>已参加人数：</span>30</div>
				</div>
				<div class="descript">软件学院组织的一次活动，大家一起锻炼身体~</div>
			</div>
			<div class="content">
				<input class="button pink" type="submit" value="参加" />
				<div class="title">一起来爬山吧</div>
				<div class="info">
					<div class="time"><span>时间：</span>2015-12-20</div>
					<div class="place"><span>地点：</span>紫金山</div>
					<div class="num"><span>已参加人数：</span>30</div>
				</div>
				<div class="descript">软件学院组织的一次活动，大家一起锻炼身体~</div>
			</div>
		</div>
		<!-- 全部活动 -->
		<div class="tab-pane fade" id="all">
			<div class="input-group input-group-sm">
				<input type="text" class="form-control" aria-describedby="sizing-addon3" placeholder="搜索竞赛……">
				<span class="input-group-addon" id="sizing-addon3"><a href="#"><span style="color:white" class="glyphicon glyphicon-search" aria-hidden="true"></span></a></span>
			</div>
			<div class="content">
				<input class="button pink" type="submit" value="参加" />
				<div class="title">一起来爬山吧</div>
				<div class="info">
					<div class="time"><span>时间：</span>2015-12-20</div>
					<div class="place"><span>地点：</span>紫金山</div>
					<div class="num"><span>已参加人数：</span>30</div>
				</div>
				<div class="descript">软件学院组织的一次活动，大家一起锻炼身体~</div>
			</div>
			<div class="content">
				<input class="button pink" type="submit" value="参加" />
				<div class="title">一起来爬山吧</div>
				<div class="info">
					<div class="time"><span>时间：</span>2015-12-20</div>
					<div class="place"><span>地点：</span>紫金山</div>
					<div class="num"><span>已参加人数：</span>30</div>
				</div>
				<div class="descript">软件学院组织的一次活动，大家一起锻炼身体~</div>
			</div>
		</div>
		<!-- 我参与的 -->
		<div class="tab-pane fade" id="participate">
		我参与的
		</div>
		<!-- 历史活动 -->
		<div class="tab-pane fade" id="history">
		历史活动
		</div>
	</div>
</div>
</body>
</html>
<?php }} ?>
