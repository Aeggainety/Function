<?php
	header("Content-Type:text/html;charset=utf-8");
	echo '<b>时间函数</b>';
	
	echo '<hr>';

	//返回当前Unix时间戳
	echo time();
	echo '<hr>';

	//取得一个日期的Unix时间戳  时分秒月日年
	echo mktime(0,0,0,9,21,2017);
	echo '<hr>';

	//格式化一个本地时间/日期
	echo date('Y-m-d H:i:s', time());
	echo '<hr>';

	//验证一个格里高利日期
	echo checkdate(9, 21, 2017);
	echo '<hr>';

	//设定用于一个脚本中所有日期时间函数的默认时区
	date_default_timezone_set('Asia/Shanghai');
	echo '<hr>';

	//取得日期/时间信息
	var_dump(getdate());
	echo '<hr>';

	//将任何英文文本的日期时间描述解析为Unix时间戳
	echo strtotime('20170921 14:37');
	echo '<hr>';

	//返回当前 Unix 时间戳和微秒数
	echo microtime(true);


?>