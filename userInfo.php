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
					<div class="panel panel-default">
					  <div class="panel-heading">投资项目</div>
					  <div class="panel-heading">借款项目</div>
					  <div class="panel-body"> <a href="#">借款项目</a></div>
					  <div class="panel-body"> <a href="#">还款明细</a></div>
					  
					  <div class="panel-heading">我的账户</div>
					  <div class="panel-body"> <a href="#">账户信息</a></div>
					  <div class="panel-body"> <a href="#">实名认证</a></div>
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
		        	<div class="panel panel-default" id="loginReg">
					  <div class="panel-heading"><h4>个人资料</h4></div>
					  <div class="panel-body">
					     <form class="form-horizontal">
					     	  <div class="form-group">
							    <label class="col-sm-2 control-label">用户名</label>
							    <div class="col-sm-10">xiaoqiang</div>
							  </div>
							  <div class="form-group">
							     <label class="col-sm-2 control-label">真实姓名</label>
							     <div class="col-sm-10">小强</div>
							  </div>
							  <div class="form-group">
							     <label class="col-sm-2 control-label">证件号码</label>
							     <div class="col-sm-10">5108*********6363</div>
							  </div>
							  <div class="form-group">
							    <label for="inputEmail3" class="col-sm-2 control-label">电话号码</label>
							    <div class="col-sm-10">
							      <input type="email" class="form-control" id="inputEmail3" placeholder="请正确的输入电话号码">
							    </div>
							  </div>						  																			 							  	 
							  <div class="form-group">
							    <label  class="col-sm-2 control-label">个人学历</label>
							    <div class="col-sm-10">
							    	<button class="btn btn-default btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								   本科<span class="caret"></span>
								  </button>
								  <ul class="dropdown-menu">
								    <li><a href="#">初中</a></li>
								    <li><a href="#">高中</a></li>
								    <li><a href="#">中专</a></li>
								    <li><a href="#">大专</a></li>
								    <li><a href="#">本科</a></li>
								    <li><a href="#">硕士学位</a></li>
								    <li><a href="#">研究学位</a></li>
								    <li><a href="#">博士学位</a></li>
								    <li><a href="#">博士后学位</a></li>								    
								  </ul>
							    </div>
							  </div>
							  <div class="form-group">
							    <label  class="col-sm-2 control-label">个人收入</label>
							    <div class="col-sm-10">
							    	<button class="btn btn-default btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
								    5000~9000<span class="caret"></span>
								    </button>
							    	<ul class="dropdown-menu">
								    <li><a href="#">0~1000</a></li>
								    <li><a href="#">1000~3000</a></li>
								    <li><a href="#">4000~7000</a></li>
								    <li><a href="#">8000~10000</a></li>
								    <li><a href="#">10000~20000</a></li>
								    <li><a href="#">20000以上</a></li>
								  </ul>
							    </div>
							  </div>
							  <div class="form-group">
							    <label for="inputPassword3" class="col-sm-2 control-label">家庭住址</label>
							    <div class="col-sm-10">
							      <input type="password" class="form-control" id="inputPassword3" placeholder="请输入正确的家庭地址">
							    </div>
							  </div>
							  
							  
							  <div class="form-group">
							    <div class="col-sm-12">
							      <button type="submit" class="btn btn-primary">保存数据</button>
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