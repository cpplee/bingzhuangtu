<?php
header("content-type:text/html;charset=utf-8");
//利用ajax跨域请求其他网站的信息

//file_get_contents(本地file/其他网站的url地址);
$url = "http://www.weather.com.cn/adat/sk/101010100.html";
echo file_get_contents($url); //根据$url发送请求并获得请求的信息
