<?php
header("content-type:text/html;charset=utf-8");

//收集发表的聊天信息，并存储
//获得最新的聊天信息
$link = @mysql_connect('127.0.0.1','root','');
mysql_select_db('db_test', $link);
mysql_query('set names utf8');

//接收表单信心
$color      = $_POST['color'];
$receiver   = $_POST['receiver'];
$biaoqing   = $_POST['biaoqing'];
$msg        = $_POST['msg'];

//拼装insert语句
$sql = "insert into message values (null,'$msg','admin','$receiver','$color','$biaoqing',now())";
$qry = mysql_query($sql);
if($qry){
    echo "发表聊天成功!";
}else{
    echo "发表聊天失败!";
}