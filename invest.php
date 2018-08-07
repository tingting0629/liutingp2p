<!DOCTYPE html>
<html
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
	<link rel="stylesheet" type="text/css" href="dist/css/min/invest.min.css" />
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
	 <div class="container" id="investment">
	 	<h4>投资列表</h4>
	 	<div>
	 		<p>标的状态</p>
		    <form class="navbar-form navbar-left" role="search">
			  <button type="submit" class="btn btn-default  active">全部</button>
			  <button type="submit" class="btn btn-default">招标中</button>
			  <button type="submit" class="btn btn-default">还款中</button>		    
			</form>
		</div>
	 </div>	
	<!--投资信息列表-->
		<div id="invest" class="container">
			<!--面板结构-->
				<table class="table table-hover">
			      <thead>
			        <tr>
			          <th>借款人</th>
			          <th class="hide620">借款标题</th>
			          <th>年利率</th>
			          <th>金额</th>
			          <th class="hide620">还款方式</th>
			          <th>进度</th>
			          <th>操作</th>
			        </tr>
			      </thead>
			      <tbody>
			        <tr>			          
			          <td>张三</td>
			          <td class="hide620">度难关</td>
			          <td>@10.00%</td>
			          <td>2000.00</td>
			          <td class="hide620">按月分期</td>
			          <td>78.00%</td>
			          <td><button type="button" class="btn btn-sm btn-danger">查看</button></td>
			        </tr>
			        <tr>
			          
			          <td>张三</td>
			          <td class="hide620">度难关</td>
			          <td>@10.00%</td>
			          <td>2000.00</td>
			          <td class="hide620">按月分期</td>
			          <td>78.00%</td>
			          <td><button type="button" class="btn btn-sm btn-danger">查看</button></td>
			        </tr>
			        <tr>
			          
			          <td>张三</td>
			          <td class="hide620">度难关</td>
			          <td>@10.00%</td>
			          <td>2000.00</td>
			          <td class="hide620">按月分期</td>
			          <td>78.00%</td>
			          <td><button type="button" class="btn btn-sm btn-danger">查看</button></td>
			        </tr>
			      </tbody>
			    </table>
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