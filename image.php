<?php
	header("Content-Type:text/html;charset=utf-8");
	echo '<b>图像处理</b>';
	echo '<hr>';

	//=====================================图像处理=====================================

	// //新建一个真彩色图像
	// $im = imagecreatetruecolor(50, 50);
	// echo $im;
	// echo '<hr>';

	// //为一副图像分配颜色
	// $background = imagecolorallocate($im, 255, 0, 0);
	// // echo $background;
	// print_r($background);
	// echo '<hr>';

	// //区域填充
	// var_dump(imagefill($im, 0, 0, 26367));
	// echo '<hr>';

	// //画一椭圆弧且填充
	// var_dump(imagefilledarc($im, 50, 50, 100, 50, 0, 40, 255, 5));
	// echo '<hr>';

	// //画一椭圆并填充
	// var_dump(imagefilledellipse($im, 200, 150, 300, 200, 221));
	// echo '<hr>';

	// //画一矩形并填充
	// var_dump(imagefilledrectangle($im, 200, 150, 300, 200, 214));
	// echo '<hr>';

	// //水平地画一行字符串
	// var_dump(imagestring($im, 5, 0, 0, 'a', 215));
	// echo '<hr>';

	// //垂直地画一行字符串
	// var_dump(imagestringup($im, 5, 0, 0, 'string', 123));
	// echo '<hr>';

	// //以PNG格式将图像输出到浏览器或文件
	// var_dump(imagepng($im));
	// echo '<hr>';

	// //重采样拷贝部分图像并调整大小
	// var_dump(imagecopyresampled($im, $im, 0, 0, 0, 0, 50, 50, 200, 150));
	// echo '<hr>';

	// //销毁一图像
	// var_dump(imagedestroy($im));
	// echo '<hr>';

	header("Content-type: image/png");
	$im = @imagecreate(100, 50)
	    or die("不能初始化新的 GD 图像流");
	$background_color = imagecolorallocate($im, 255, 255, 255);
	$text_color = imagecolorallocate($im, 233, 14, 91);
	imagestring($im, 1, 10, 10,  "A Simple Text String", $text_color);
	imagepng($im);
	imagedestroy($im);
	//=====================================图像处理=====================================


?>