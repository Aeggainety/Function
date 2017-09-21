<?php
	header("Content-Type:text/html;charset=utf-8");
	echo "<b>文件处理函数</b>";
	echo '<hr>';


	//==============================打开、关闭文件或者 URL==============================

	//打开文件或者 URL
	echo $handle = fopen('string.php', 'r');
	echo "<hr>";

	//关闭一个已打开的文件指针
	echo fclose($handle);
	echo '<hr>';

	//==============================打开、关闭文件或者 URL==============================


	//=====================================文件属性=====================================
	
	//检查文件或目录是否存在
	var_dump(file_exists('array.php'));
	echo '<hr>';

	//获取文件大小(单位:字节)
	echo filesize('string.php');
	echo '<hr>';

	//判断给定文件是否可读
	var_dump(is_readable('string.php'));
	echo '<hr>';

	//判断给定文件是否可写
	var_dump(is_writable('array.php'));
	echo '<hr>';

	//判断给定文件是否可执行
	var_dump(is_executable('string.php'));
	echo '<hr>';

	//获取文件的创建时间  时间戳
	echo filectime('string.php');
	echo '<hr>';

	//获取文件的修改时间
	echo filemtime('array.php');
	echo '<hr>';

	//获取文件的上次访问时间
	echo fileatime('test.php');
	echo '<hr>';

	//获取文件大部分属性
	print_r(stat('array.php'));
	echo '<hr>';

	//=====================================文件属性=====================================
	
	
	//=====================================文件操作=====================================
	
	//写入文件
	$filename = 'file.txt';
	$handle = fopen($filename, 'a');
	// fwrite($handle, '写入文件');
	// fputs($handle,"同上<br>");
	echo '<hr>';

	//读取文件
	$filename = 'file.txt';
	$handle = fopen($filename, 'r');
	echo fread($handle, filesize($filename));
	echo '<hr>';

	//检测文件指针是否到了文件结束的位置
	$filename = 'file.txt';
	$handle = fopen($filename, 'r');
	var_dump(feof($handle));
	echo '<hr>';

	//从文件指针中读取一行
	$handle = @fopen('file.txt', 'r');
	var_dump(fgets($handle));
	echo '<hr>';

	//从文件指针中读取字符
	$handle = @fopen('string.php', 'r');
	var_dump(fgetc($handle));
	echo '<hr>';

	//把整个文件读入一个数组中  (换行为界)
	print_r(file($filename));
	echo '<hr>';

	//输出一个文件
	print_r(readfile($filename));
	echo '<hr>';

	//将整个文件读入一个字符串
	print_r(file_get_contents($filename));
	echo '<hr>';

	//将一个字符串写入文件 (原内容将被替换)
	file_put_contents($filename, '中国最主要的社会矛盾是外国列强与中华民族的矛盾');
	print_r(file_get_contents($filename));
	echo '<hr>';

	//返回文件指针读/写的位置
	echo ftell($handle);
	echo '<hr>';

	//在文件指针中定位
	echo fseek($handle, 3);
	echo '<hr>';

	//倒回文件指针的位置
	var_dump(rewind($handle));
	echo '<hr>';

	//轻便的咨询文件锁定
	$fp=fopen('file.txt','r');
	var_dump(flock($fp, LOCK_SH));//共享锁
	//flock($fp, LOCK_EX);//独立锁，写文件时用它打开
	//flock($fp, LOCK_NB);//附加锁
	var_dump(flock($fp, LOCK_UN));//释放锁
	fclose($fp);
	echo '<hr>';

	//=====================================文件操作=====================================
	

	//=======================================目录=======================================
	
	//返回路径中的文件名部分
	$path = "D:/wamp/wamp/www/wrx/file.txt";
	echo basename($path);
	echo '<hr>';

	//返回路径中的目录部分
	echo dirname($path);
	echo '<hr>';

	//返回文件路径的信息
	print_r(pathinfo($path));
	echo '<hr>';

	//打开目录句柄
	$path = "D:/wamp/wamp/www/wrx";
	var_dump(opendir($path));
	echo '<hr>';

	//从目录句柄中读取条目
	$path = "D:/wamp/wamp/www/wrx";
	$fp = opendir($path);
	var_dump(readdir($fp));
	echo '<hr>';

	//关闭目录句柄
	$fp=opendir('D:/wamp/wamp/www/wrx');
	var_dump(readdir($fp));
	closedir($fp);
	echo '<hr>';

	//倒回目录句柄
	$fp=opendir('D:/wamp/wamp/www/wrx');
	echo readdir($fp).'<br />';
	echo readdir($fp).'<br />';
	echo readdir($fp).'<br />';
	rewinddir($fp);
	echo readdir($fp).'<br />';
	closedir($fp);
	echo '<hr>';

	//新建目录
	// mkdir('D:/wamp/wamp/www/wrx/test');
	echo '<hr>';

	//删除目录
	// var_dump(rmdir('test'));
	echo '<hr>';

	//删除文件
	// var_dump(unlink('1.txt'));
	echo '<hr>';

	//拷贝文件
	var_dump(copy('file.txt', 'test/file.txt'));
	echo '<hr>';

	//重命名一个文件或目录
	// var_dump(rename('new.php', 'test.php'));
	echo '<hr>';

	//=======================================目录=======================================
	

	//=================================文件的上传与下载=================================
	
	//判断文件是否是通过HTTP POST 上传的
	var_dump(is_uploaded_file('string.php'));
	echo '<hr>';

	//将上传的文件移动到新位置
	var_dump(move_uploaded_file('D:/workspace/project/shaimobao/uploadfile/2016/1230/20161230012940123.jpg', 'D:wamp/wamp/www/wrx/test'));
	echo '<hr>';

	//=================================文件的上传与下载=================================

?>