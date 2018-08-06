<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title></title>
		<!--icon图标-->
		<link rel="shortcut icon" href="static/images/favicon.ico" />
		<!--视口兼容移动端-->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<!--引入bootstrap核心样式-->
		<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css" />
		<!--引入图标字体-->
		<link rel="stylesheet" type="text/css" href="lib/fontawesome/css/fontawesome-all.min.css"/>	
		
		<!--自定义样式-->
		<link rel="stylesheet" type="text/css" href="dist/css/min/personal.min.css" />
		<!--兼容低版本的浏览器-->
		<!--[if lt IE 9]>
	      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>

	<body>
		<!--顶部导航条-->
		<?php
		   include_once("./header.html");
		?>

		<!--模板内容部分-->
		<div class="container" id="person">
			<div class="row">
				<!--左侧栏-->
				<div class="col-lg-3">
					<div class="panel panel-default projectPage">
					  <div class="panel-heading">投资项目</div>
					  <div class="panel-heading">借款项目</div>
					  <div class="panel-body"> <a href="bid_request_list.php">借款项目</a></div>
					  <div class="panel-body"> <a href="#">还款明细</a></div>
					  
					  <div class="panel-heading">我的账户</div>
					  <div class="panel-body" style="background: #337ab7;"> <a href="personal.php" style="color: white;">账户信息</a></div>
					  <div class="panel-body"> <a href="realAuth.php">实名认证</a></div>
					  <div class="panel-body"> <a href="#">银行卡管理</a></div>
					  <div class="panel-body"> <a href="#">登录记录</a></div>
					  
					  <div class="panel-heading">资产详情</div>
					  <div class="panel-body"> <a href="#">账户流水</a></div>
					  <div class="panel-body"> <a href="#">充值明细</a></div>
					  <div class="panel-body"> <a href="#">提现记录</a></div>
					  <div class="panel-body"> <a href="#">收款明细</a></div>
					  
					  <div class="panel-heading">个人资料</div>
					</div>
				</div>
				
				<!--中间内容-->				
				<div class="col-sm-9" id="content">
					<div class="panel panel-default">
						<div class="panel-body el-account">
							<div class="el-account-info">
								<div class="pull-left el-head-img">
									<img class="icon" src="static/images/head_icon.jpg">
								</div>
								<div class="pull-left el-head">
									<p>昵 称：源代码教育</p>
									<p>用户名：小强</p>
									<p>最后登录时间：2016-10-25 15:30:10</p>
								</div>
								<div class="clearfix"></div>
							</div>
							
							<div style="margin: 10px 2px;" class="row h4">
								<div class="col-sm-4">
									总金额：<span class="text-primary">10000元</span>
								</div>
								<div class="col-sm-4">
									可用金额：<span class="text-primary">8000元</span>
								</div>
								<div class="col-sm-4">
									冻结金额：<span class="text-primary">2000元</span>
								</div>
							</div>
							
							<div style="text-align: center;width: 400px;margin:30px auto 0px auto;">
								<a class="btn btn-primary btn-lg" href="recharge.html">账户充值</a>
								<a class="btn btn-danger btn-lg" href="moneyWithdraw_apply.html">账户提现</a>
							</div>
							
							<div class="el-account-info">
								<div class="row">
									<div class="col-sm-4">
										<div class="el-accoun-auth">
											<div class="el-accoun-auth-left">
												<img src="static/images/shiming.png">
											</div>
											<div class="el-accoun-auth-right">
												<h5>实名认证</h5>
												<p>
													<!--
														已认证
														<a href="realAuth.html">查看</a>
													-->
														未认证
														<a href="realAuth.html">马上认证</a>

												</p>
											</div>
											<div class="clearfix"></div>
											<p class="info">实名认证之后才能在平台投资</p>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="el-accoun-auth">
											<div class="el-accoun-auth-left">
												<img src="static/images/shouji.jpg">
											</div>
											<div class="el-accoun-auth-right">
												<h5>手机认证</h5>
												<p>
													已认证
													<a href="#">查看</a>
												</p>
											</div>
											<div class="clearfix"></div>
											<p class="info">可以收到系统操作信息,并增加使用安全性</p>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="el-accoun-auth">
											<div class="el-accoun-auth-left">
												<img src="static/images/youxiang.jpg">
											</div>
											<div class="el-accoun-auth-right">
												<h5>邮箱认证</h5>
												<p>
													已认证
													<a href="#">查看</a>
												</p>
											</div>
											<div class="clearfix"></div>
											<p class="info">您可以设置邮箱来接收重要信息</p>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-4">
										<div class="el-accoun-auth">
											<div class="el-accoun-auth-left">
												<img src="static/images/baozhan.jpg">
											</div>
											<div class="el-accoun-auth-right">
												<h5>VIP会员</h5>
												<p>
													普通用户
													<a href="#">查看</a>
												</p>
											</div>
											<div class="clearfix"></div>
											<p class="info">VIP会员，让你更快捷的投资</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
				
		<!--页脚-->
		<?php
		   include_once("./footer.html");
		?>
		
	</body>
	<!--引入jquery库-->
	<script src="lib/jquery/jquery.js" type="text/javascript" charset="utf-8"></script>
	<!--引入bootstrap核心js库-->
	<script src="lib/bootstrap/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
	<!--自定义特效-->
    <script src="src/javascript/p2pEffects.js" type="text/javascript" charset="utf-8"></script>

</html>