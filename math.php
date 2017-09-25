<?php
	header("Content-Type:text/html;charset=utf-8");
	echo '<b>数学函数</b>';
	echo '<hr>';

	//求绝对值
	echo abs(-6.2);
	echo '<hr>';

	//进一法取整
	echo ceil(3.1);
	echo '<hr>';

	//舍去法取整
	echo floor(3.9);
	echo '<hr>';

	//浮点数取余
	echo fmod(5.7, 1.3);
	echo '<hr>';

	//返回数的n次方
	echo pow(2, 3);
	echo '<hr>';

	//浮点数四舍五入
	echo round(3.141592653,2);
	echo '<hr>';

	//求平方根
	echo sqrt(9);
	echo '<hr>';

	//求最大值
	echo max(1,3,9,5);
	echo '<hr>';

	//求最小值
	echo min(2,5,8,6,9);
	echo '<hr>';

	//更好的随机数
	echo mt_rand(0,9);
	echo '<hr>';

	//随机数
	echo rand(0,9);
	echo '<hr>';

	//获取圆周率
	echo pi();

?>