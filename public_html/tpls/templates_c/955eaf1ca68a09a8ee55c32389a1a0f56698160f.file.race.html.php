<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-04 10:36:11
         compiled from "..\public_html\tpls\templates\race.html" */ ?>
<?php /*%%SmartyHeaderCode:2147956615b7262f5f8-57370542%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '955eaf1ca68a09a8ee55c32389a1a0f56698160f' => 
    array (
      0 => '..\\public_html\\tpls\\templates\\race.html',
      1 => 1449221754,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2147956615b7262f5f8-57370542',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56615b72658836_65058684',
  'variables' => 
  array (
    'name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56615b72658836_65058684')) {function content_56615b72658836_65058684($_smarty_tpl) {?><!-- 作者：陈云龙 -->
<!-- 时间：2015-10-30 15:33 -->
<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<title>健康专家</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap-modify.css" rel="stylesheet">
	<link href="css/race.css" rel="stylesheet">
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
			<li class="active"><a href="race.php">竞赛 </a></li>
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
		<li role="presentation" class="active"><a href="#all" data-toggle="tab">全部竞赛</span></a></li>
		<li role="presentation"><a href="#add" data-toggle="tab">发布竞赛</a></li>
		<li role="presentation"><a href="#participate" data-toggle="tab">我参与的</a></li>
		<li role="presentation"><a href="#history" data-toggle="tab">历史竞赛</a></li>
	</ul>
	<div class="tab-content">
		<!-- 全部竞赛 -->
		<div class="tab-pane fade in active" id="all">
			<div class="content">
				<div class="input-group input-group-sm">
					<input type="text" class="form-control" aria-describedby="sizing-addon3" placeholder="搜索竞赛……">
					<span class="input-group-addon" id="sizing-addon3"><a href="#"><span style="color:white" class="glyphicon glyphicon-search" aria-hidden="true"></span></a></span>
				</div>
				<table class="race-item">
					<tr>
						<th rowspan="2"><a href="#">我们一起来运动</a></th>
						<th>参与人数</th>
						<th>开始时间</th>
						<th>结束时间</th>
						<th>胜利奖金</th>
						<th width="130px">发起人</th>
					</tr>
					<tr>
						<td>30</td>
						<td>2015-11-01 13:32</td>
						<td>2015-11-02 14:32</td>
						<td>1000金币</td>
						<td class="username"><a href="#">笑话人生cylong</a></td>
					</tr>
				</table>
				<table class="race-item">
					<tr>
						<th rowspan="2"><a href="#">快来和我们一起PK吧</a></th>
						<th>参与人数</th>
						<th>开始时间</th>
						<th>结束时间</th>
						<th>胜利奖金</th>
						<th width="130px">发起人</th>
					</tr>
					<tr>
						<td>30</td>
						<td>2015-11-01 13:32</td>
						<td>2015-11-02 14:32</td>
						<td>1000金币</td>
						<td class="username"><a href="#">cylong</a></td>
					</tr>
				</table>
				<table class="race-item">
					<tr>
						<th rowspan="2"><a href="#">这个季节适合跑步，奔跑吧</a></th>
						<th>参与人数</th>
						<th>开始时间</th>
						<th>结束时间</th>
						<th>胜利奖金</th>
						<th width="130px">发起人</th>
					</tr>
					<tr>
						<td>30</td>
						<td>2015-11-01 13:32</td>
						<td>2015-11-02 14:32</td>
						<td>1000金币</td>
						<td class="username"><a href="#">lsy</a></td>
					</tr>
				</table>
			</div>
		</div>
		<!-- 发布竞赛 -->
		<div class="tab-pane fade" id="add">
		发布竞赛
		</div>
		<!-- 我参与的 -->
		<div class="tab-pane fade" id="participate">
		我参与的
		</div>
		<!-- 历史竞赛 -->
		<div class="tab-pane fade" id="history">
		历史竞赛
		</div>
	</div>
</div>
</body>
</html>
<?php }} ?>
