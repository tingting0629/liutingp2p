<?php
   //响应头,设置编码格式
   header("content-Type:text/html;charset=utf-8");
   //数据库连接
   //数据库名称为p2p
   $conn=mysqli_connect("localhost", "root", "root", "p2p", 3306) or die("数据库连接失败!");
?>