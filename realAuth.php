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
		<link rel="stylesheet" type="text/css" href="dist/css/min/realAuth.min.css" />
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
					  <div class="panel-body"> <a href="personal.php">账户信息</a></div>
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
				<div class="col-lg-9">
					<div class="panel panel-default">
					  <div class="panel-heading">实名认证</div>
					  <div class="panel-body">
					    <form class="form-horizontal">
					    	  <div class="form-group">
							    <p class="protect">为保护您账户安全，实名认证成功之后不能修改信息，请认真填写！</p>
							  </div>
							  <!--用户名-->
							  <div class="form-group">
							    <label for="username" class="col-sm-3 control-label">用户名</label>
							    <div class="col-sm-9">
							      <p class="form-control-static">小强</p>
							    </div>
							  </div>
							  <!--姓名-->
							  <div class="form-group">
							    <label for="yourname" class="col-sm-3 control-label">姓名</label>
							    <div class="col-sm-9">
							      <input type="text" class="form-control">
							    </div>
							  </div>
							  <!--性别-->
							  <div class="form-group">
							    <label class="col-sm-3 control-label">性别</label>
							    <div class="col-sm-9">
							       <select name="sex" class="form-control">
								       	<option value="男">男</option>
								       	<option value="女">女</option>
							       </select>
							    </div>
							  </div>
							  
							  <!--证件类型-->
							  <div class="form-group">
							    <label class="col-sm-3 control-label">证件类型</label>
							    <div class="col-sm-9">
							       <select name="card" class="form-control">
								       	<option value="身份证">身份证</option>
								       	<option value="驾驶证">驾驶证</option>
								       	<option value="军官证">军官证</option>
							       </select>
							    </div>
							  </div>
							  
							  <!--证件号码-->
							  <div class="form-group">
							    <label for="yourname" class="col-sm-3 control-label">证件号码</label>
							    <div class="col-sm-9">
							      <input type="text" class="form-control">
							    </div>
							  </div>
							  
							  <!--出生日期-->
							  <div class="form-group">
							    <label for="yourname" class="col-sm-3 control-label">出生日期</label>
							    <div class="col-sm-9">
							      <input type="text" class="form-control">
							    </div>
							  </div>
							  
							  <!--证件地址-->
							  <div class="form-group">
							    <label for="yourname" class="col-sm-3 control-label">证件地址</label>
							    <div class="col-sm-9">
							      <input type="text" class="form-control cardAddress">
							    </div>
							  </div>
							  
							  <!--上传照片-->
							  <div class="form-group">
						        	<label class="col-sm-3  control-label" for="address">身份证照片</label>
					        		<div class="col-sm-9">
					        			<p class="text-help text-primary">请点击“选择图片”,选择证件的正反两面照片。</p>
					        			

					        			<div class="idCardItem">
					        				<div>
					        					<a href="javascript:;" id="uploa" "dbtn1"="">上传正面</a>
					        				</div>
					        				<img alt="" src="" class="uploadImg" id="uploadImg1">
					        				<input type="hidden" value="" name="papersimg01">
					        			</div>
					        			<div class="idCardItem">
					        				<div>
					        					<a href="javascript:;" id="uploadBtn2">上传反面</a>
					        				</div>
					        				<img alt="" src="" class="uploadImg" id="uploadImg2">
					        				<input type="hidden" value="" name="papersimg02">
					        			</div>
					        			<div class="clearfix"></div>
					        			
						        	</div>
						        </div>
							  
							  <div class="form-group">
							    <div class="col-sm-offset-3 col-sm-9">
							      <button type="submit" class="btn btn-primary btn-default">提交认证</button>
							    </div>
							  </div>
						</form>
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