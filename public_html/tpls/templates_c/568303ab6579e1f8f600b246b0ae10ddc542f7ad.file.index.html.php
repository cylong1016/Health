<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-04 10:22:57
         compiled from "..\public_html\tpls\templates\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2183956604f12a0ec36-13531309%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '568303ab6579e1f8f600b246b0ae10ddc542f7ad' => 
    array (
      0 => '..\\public_html\\tpls\\templates\\index.html',
      1 => 1449220929,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2183956604f12a0ec36-13531309',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56604f12a64b81_37306214',
  'variables' => 
  array (
    'name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56604f12a64b81_37306214')) {function content_56604f12a64b81_37306214($_smarty_tpl) {?><!-- 作者：陈云龙 -->
<!-- 时间：2015-10-28 14:52 -->
<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<title>健康专家</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap-modify.css" rel="stylesheet">
	<link href="css/index.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="navbar-header">
		<a class="navbar-brand" href="index.php">健康专家</a>
	</div>
	<div class="nav-center">
		<ul class="nav navbar-nav">
			<li class="active"><a href="index.php">首页 </i></a></li>
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
			<li>
				<a href="#"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a>
			</li>
		</ul>
	</div>
</nav>
<div class="container box">
	<ul class="nav nav-tabs nav-stacked sidebar">
		<li role="presentation" class="active"><a href="#run" data-toggle="tab">疯狂运动</a></li>
		<li role="presentation"><a href="#group" data-toggle="tab">朋友圈</a></li>
		<li role="presentation"><a href="#body" data-toggle="tab">我的健康</a></li>
	</ul>
	<div id="avater">
		<img src="images/avater.jpg">
		<br><br>
		<a href="user.php">笑话人生cylong</a>
	</div>
	<div class="tab-content">
		<!-- 疯狂运动 -->
		<div class="tab-pane fade in active" id="run">
			<div class="content">
				<span class="title">您本周运动状况：</span>
				<span class="subtitle">运动距离/公里</span>
				<div class="progress">
					<div class="progress-bar" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="10" style="min-width: 5em; width: 20%;">
						2/10
					</div>
				</div>
				<span class="subtitle">运动时间/天</span>
				<div class="progress">
					<div class="progress-bar" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="7" style="min-width: 5em; width: 71.43%;">
						5/7
					</div>
				</div>
			</div>
			<div class="content">
				<span class="title">您的运动总量：</span>
				<div class="run-total">
					运动距离: <span class="em-big">30.5</span>公里
				</div>
				<div class="run-total">
					运动时间: <span class="em-big">32.4</span>小时
				</div>
				<div class="run-total">
					您的排名： <span class="em-big">181</span> <span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span></span>
				</div>
			</div>
			<div class="content">
				<span class="title">全站排名：</span>
				<ul class="nav nav-tabs ranking-tab">
					<li role="presentation" class="active"><a href="#" data-toggle="tab">距离</a></li>
					<li role="presentation"><a href="#" data-toggle="tab">时间</a></li>
				</ul>
				<div class="list-group">
					<a href="#" class="list-group-item">
						<span class="sort-num">1</span>
						<img class="sort-avater" src="images/avater.jpg">lsy<span class="sort-info">10公里</span></a>
					<a href="#" class="list-group-item">
						<span class="sort-num">2</span>
						<img class="sort-avater" src="images/avater.jpg">cylong<span class="sort-info">9.5公里</span></a>
					<a href="#" class="list-group-item">
						<span class="sort-num">3</span>
						<img class="sort-avater" src="images/avater.jpg">Morbi leo risus<span class="sort-info">8公里</span></a>
					<a href="#" class="list-group-item">
						<span class="sort-num">4</span>
						<img class="sort-avater" src="images/avater.jpg">Porta ac consectetur ac<span class="sort-info">7.5公里</span></a>
					<a href="#" class="list-group-item">
						<span class="sort-num">5</span>
						<img class="sort-avater" src="images/avater.jpg">Vestibulum at eros<span class="sort-info">7公里</span></a>
					<a href="#" class="list-group-item">
						<span class="sort-num">6</span>
						<img class="sort-avater" src="images/avater.jpg">Vestibulum at eros<span class="sort-info">6.5公里</span></a>
					<a href="#" class="list-group-item">
						<span class="sort-num">7</span>
						<img class="sort-avater" src="images/avater.jpg">Vestibulum at eros<span class="sort-info">6公里</span></a>
					<a href="#" class="list-group-item">
						<span class="sort-num">8</span>
						<img class="sort-avater" src="images/avater.jpg">Vestibulum at eros<span class="sort-info">5.5公里</span></a>
					<a href="#" class="list-group-item">
						<span class="sort-num">9</span>
						<img class="sort-avater" src="images/avater.jpg">Vestibulum at eros<span class="sort-info">4公里</span></a>
					<a href="#" class="list-group-item">
						<span class="sort-num">10</span>
						<img class="sort-avater" src="images/avater.jpg">Vestibulum at eros<span class="sort-info">3公里</span></a>
				</div>
			</div>
		</div>
		<!-- 朋友圈 -->
		<div class="tab-pane fade" id="group">
			<div id="inputarea">
				<span>炫耀一下自己的运动成果吧~</span>
				<textarea></textarea>
				<input class="button pink" type="submit" value="发布" />
			</div>
			<div class="content">
				<img class="item-avater" src="images/avater.jpg"><span class="item-name">艾已成诗lsy</span>
				<span class="item-date">10-29 13:24:45</span>
				<div class="item-content">秋天的主旋律可以是美景、好身材，但绝对不能是秋膘和肉肉！
				所以想减肥、塑形、增肌的亲们，快快进入我们的“跟着私教甩秋膘”专题get新技能吧~这个秋天，跟着名教一起，疯狂的甩秋膘！！！</div>
			</div>
			<div class="content">
				<img class="item-avater" src="images/avater.jpg"><span class="item-name">笑话人生cylong</span>
				<span class="item-date">10-28 23:24:45</span>
				<div class="item-content">哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈，
				哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈</div>
			</div>
		</div>
		<!-- 身体状况 -->
		<div class="tab-pane fade" id="body">
			<div class="content">
				<span class="title">身高体重：</span>
				<div class="bmi_img">
					<img src="images/per.png" />
			 	</div>
				<div class="bmi">
					<div class="input-group input-group-sm">
						<span class="input-group-addon" id="sizing-addon3">身高</span>
						<input type="text" class="form-control" aria-describedby="sizing-addon3" placeholder="179">
						<span class="input-group-addon" id="sizing-addon3">厘米</span>
					</div>
					<div class="input-group input-group-sm">
						<span class="input-group-addon" id="sizing-addon3">体重</span>
						<input type="text" class="form-control" aria-describedby="sizing-addon3" placeholder="56">
						<span class="input-group-addon" id="sizing-addon3">公斤</span>
					</div>
					<input class="button pink" type="submit" value="保存"></input>
			  </div>
			  <div class="bmi_val">BMI 17.5 偏轻</div>
			  <div class="clear"></div>
		  </div>
		  <div class="content">
			  <span class="title">心率：129</span>
		  </div>
		  <div class="content">
			 <span class="title">血压：108/60</span>
		 </div>
		</div>
	</div>
</div>

</body>
<?php echo '<script'; ?>
 src="http://apps.bdimg.com/libs/jquery/2.0.0/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/bootstrap.js"><?php echo '</script'; ?>
>
</html>
<?php }} ?>
