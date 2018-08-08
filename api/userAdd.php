<?php
  //1.引入数据库链接
  include_once("./conn.php");
  //2.接收表单变量的值
   $username=$_POST["username"];
   $password=$_POST["password1"];
   $realname=$_POST["realname"];
   $mobile=$_POST["mobile"];
   $sex=$_POST["sex"];
   //3.构造sql语句
   $sqlStr="insert into  userinfo(username,password,realname,mobile,sex)  values('$username','$password','$realname','$mobile',' $sex')";
   //4.执行sql语句并返回执行的结果
   $result=mysqli_query($conn, $sqlStr);
   //5.判断是否执行成功，并且返回json给前端
   if($result){
   	   //成功
   	   $jsonArray=["isSuccess"=>true,"msg"=>"用户注册成功"];
	     echo json_encode($jsonArray);
   }else{
   	   $jsonArray=["isSuccess"=>false,"msg"=>"用户注册失败！原因：".mysqli_error($conn)];
	   echo json_encode($jsonArray);
   }
?>