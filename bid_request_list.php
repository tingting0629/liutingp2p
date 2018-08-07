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
					   <div class="panel-heading">借款项目</div>
					   
					    <table class="table table-striped">
						  <thead>
					        <tr>
					          <th>标题</th>
					          <th>时间</th>
					          <th>借款金额(元)</th>
					          <th>期限</th>
					          <th>利率</th>
					          <th>状态</th>
					          
					        </tr>
					      </thead>
					      <tbody>
					        <tr>
					          <td>
					          	<a href="#">江湖救急</a><span class="label label-primary">信</span>
				          	  </td>
					          <td>2016-01-02</td>
					          <td>2000</td>
					          <td>12月</td>
					          <td>12%</td>
					          <td>
                                <label class="text-muted">待发布</label>
                                <label class="text-success">招标中</label>
                                <label class="text-success">满标未审核</label>
                                <label class="text-success">还款中</label>
                                <label class="text-danger">招标拒绝</label>
                            </td>
					          
					        </tr>
					        
					      </tbody>
						</table>
					   	<div style="text-align: center;">
		                    <ul id="pagination" class="pagination"></ul>
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