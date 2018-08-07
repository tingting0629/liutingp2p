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
		<link rel="stylesheet" type="text/css" href="dist/css/min/borrow_apply.min.css" />
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
				<!--内容-->
				<div class="col-lg-9">
					<div class="bs-example" data-example-id="simple-alerts">
				    <div class="alert alert-info" role="alert">
				      <h3>信用借款</h3>
				      <p>
				      	<span class="text-info">授信额度：</span>
				      	<span class="text-danger" style="font-size: 16px;">2000</span>
				      	<span class="text-info">可借金额：</span>
				      	<span class="text-danger" style="font-size: 16px;">2000</span>
				      </p>
				    </div>
				    <div class="page-header">
					  <h4>借款信息<span>信用标</span></h4>
					</div>
					<!--表单-->
					<form class="form-horizontal">
					  <div class="form-group">
					    <label for="inputEmail3" class="col-sm-3 control-label">借款金额</label>
					    <div class="col-sm-3">
					      <div class="input-group">					   
						    <input type="text" class="form-control"aria-describedby="inputGroupSuccess1Status">
						  		 <span class="input-group-addon">元</span>
					      </div>
					    </div>
					  </div>
					 <div class="form-group">
					    <label for="inputEmail3" class="col-sm-3 control-label">借款利息</label>
					    <div class="col-sm-3">
					      <div class="input-group">					   
						    <input type="text" class="form-control" aria-describedby="inputGroupSuccess1Status">
						  		 <span class="input-group-addon">%</span>
					      </div>
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="inputEmail3" class="col-sm-3 control-label">借款期限</label>
					    <div class="col-sm-3">
					      <div class="input-group">					   
						    <select class="form-control">
					          <option value="">1</option>
					          <option value="">2</option>
					          <option value="">3</option>
					          <option value="">4</option>
					          <option value="">5</option>
					        </select>
						  		 <span class="input-group-addon">月</span>
					      </div>
					    </div>
					  </div>
					   <div class="form-group">
					    <label for="inputEmail3" class="col-sm-3 control-label">还款方式</label>
					    <div class="col-sm-3">
					    	<div class="input-group" id="radio">	
					      <input type="radio" name="repayment"  value="按月分期" />按月分期
					      <input type="radio" id="radio1" name="repayment"  value="按月到期" />按月到期
					      </div>
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="inputEmail3" class="col-sm-3 control-label">最小投标</label>
					    <div class="col-sm-3">
					      <div class="input-group">					   
						    <input type="text" class="form-control"aria-describedby="inputGroupSuccess1Status">
						  		 <span class="input-group-addon">元</span>
					      </div>
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="inputEmail3" class="col-sm-3 control-label">投标奖金</label>
					    <div class="col-sm-3">
					      <div class="input-group">					   
						    <input type="text" class="form-control"aria-describedby="inputGroupSuccess1Status" placeholder="0">
						  		 <span class="input-group-addon">%</span>
					      </div>
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="inputEmail3" class="col-sm-3 control-label">招标天数</label>
					    <div class="col-sm-3">
					      <div class="input-group">					   
						    <select class="form-control">
					          <option value="">1</option>
					          <option value="">2</option>
					          <option value="">3</option>
					          <option value="">4</option>
					          <option value="">5</option>
					        </select>
						  		 <span class="input-group-addon">天</span>
					      </div>
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="inputEmail3" class="col-sm-3 control-label">借款标题</label>
					    <div class="col-sm-6">
					      <div class="input-group"  style="width: 100%;">					   
						    <input type="text" class="form-control"aria-describedby="inputGroupSuccess1Status">
					      </div>
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="inputEmail3" class="col-sm-3 control-label">借款描述</label>
					    <div class="col-sm-6">
					      <div class="input-group" style="width: 100%;">					   
							<textarea class="form-control" rows="4"></textarea>
					      </div>
					    </div>
					  </div>
					  	<div class="form-group">
						    <div class="col-sm-offset-3 col-sm-10">
						      <button type="submit" class="btn btn-primary">提交申请</button>
						    </div>
						</div>
					  <div class="right">
						    <h4>相关费用</h4>
						    <p>利息 --</p>
						    <p>奖金 --</p>
							<p>管理费 --</p>
						</div>
					  
					</form>
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