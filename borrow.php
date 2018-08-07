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
		<!--引入图标字体-->
		<link rel="stylesheet" type="text/css" href="lib/fontawesome/css/fontawesome-all.min.css"/>

		<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css" />
		<!--自定义样式-->
		<link rel="stylesheet" type="text/css" href="dist/css/min/borrow.min.css" />
		<!--兼容低版本的浏览器-->
		<!--[if lt IE 9]>
		<script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>
		<!--顶部导航条-->
		<?php
		include_once ("./header.html");
		?>
		<!--内容-->
		<div class="container" id="box">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-xs-12">
					<div class="bs-example" data-example-id="contextual-panels">
						<div class="panel panel-primary">
							<div class="panel-heading" style="background-color: #40d47e;">
								<h3 class="panel-title">信用贷</h3>
							</div>
							<div class="panel-body">
								<p>
									可借金额<i> ¥ 2,000.00</i>
								</p>
								<p>
									<a href="#">
										申请条件
									</a>
								</p>
								<p>
									仅限成都地区
								</p>
								<ul>
									<li>
										填写基本资料
									</li>
									<li>
										身份认证
									</li>
									<li>
										视频认证
									</li>
								</ul>
								<a href="#" class="btn">
									立即申请
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-xs-12">
					<div class="bs-example" data-example-id="contextual-panels">
						<div class="panel panel-primary">
							<div class="panel-heading" style="background-color:#ec7e20;">
								<h3 class="panel-title">车易贷</h3>
							</div>
							<div class="panel-body">
								<p>
									可借金额<i> ¥ 2,000.00</i>
								</p>
								<p>
									<a href="#">
										申请条件
									</a>
								</p>
								<p>
									仅限成都地区
								</p>
								<ul>
									<li>
										填写基本资料
									</li>
									<li>
										身份认证
									</li>
									<li>
										视频认证
									</li>
								</ul>
								<a href="#" class="btn">
									立即申请
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-xs-12">
					<div class="bs-example" data-example-id="contextual-panels">
						<div class="panel panel-primary">
							<div class="panel-heading" style="background-color: #2ca2ee;">
								<h3 class="panel-title">房易贷</h3>
							</div>
							<div class="panel-body">
								<p>
									可借金额<i> ¥ 2,000.00</i>
								</p>
								<p>
									<a href="#">
										申请条件
									</a>
								</p>
								<p>
									仅限成都地区
								</p>
								<ul>
									<li>
										填写基本资料
									</li>
									<li>
										身份认证
									</li>
									<li>
										视频认证
									</li>
								</ul>
								<a href="#" class="btn">
									立即申请
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
		<!--页脚-->
		<?php
		include_once ("./footer.html");
		?>
	</body>
	<!--引入jquery库-->
	<script src="lib/jquery/jquery.js" type="text/javascript" charset="utf-8"></script>
	<!--引入bootstrap核心js库-->
	<script src="lib/bootstrap/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>

	<!--自定义特效-->
	<script src="src/javascript/p2pEffects.js" type="text/javascript" charset="utf-8"></script>

</html>