<?php
	header("Content-Type:text/html;charset=utf-8");
	echo "<b>字符串函数</b>";
	echo '<b>字符串函数整理</b>';
	echo '今天星期五!';
	echo '<hr>';

	//=================================去空格或其他字符=================================

	//删除字符串两端的空格或其它预定义字符
	$str = "\nhello world\r\n";//单引号\不解析
	echo '原字符:'.$str;
	echo '<br>';
	echo '使用trim函数修改后:'.trim($str);
	echo '<hr>';
	//删除字符串右边的空格或其它预定义字符
	$str = "Hello World!\n\n";
	echo '原字符:'.$str;
	echo '<br>';
	echo '使用rtrim函数修改后:'.rtrim($str);
	echo '<br>';
	//rtrim别名
	echo 'chop()效果与rtrim相同:'.chop($str);
	echo '<hr>';
	//删除字符串左边的空格或其它预定义字符
	$str = "\r\nHello World!";
	echo '原字符:'.$str;
	echo '<br>';
	echo '使用ltrim函数修改后:'.ltrim($str);
	echo '<hr>';
	//返回路径中的文件名部分
	$url = 'D:\wamp\wamp\www\wrx\string.php';
	echo '原路径:'.$url;
	echo '<br>';
	echo '文件名:'.basename($url);
	echo '<br>';
	//返回路径中的目录部分
	$url = 'D:\wamp\wamp\www\wrx\string.php';
	echo '目录:'.dirname($url);
	echo '<hr>';

	//=================================去空格或其他字符=================================


	//=================================字符串生成与转化=================================

	//把字符串填充为指定的长度
	$str = 'Hello world';
	echo str_pad($str,20,'!');//参数说明：要填充的字符串|新字符串的长度|供填充使用的字符串，默认是空白
	echo '<hr>';
	//重复使用指定字符串
	echo str_repeat('a', 5);//参数说明：要重复的字符串|字符串将被重复的次数
	echo '<hr>';
	//把字符串分割到数组中
	$str = 'Hello world';
	print_r(str_split($str));
	echo '<hr>';
	//反转字符串
	$str = 'Hello world';
	echo strrev($str);
	echo '<hr>';
	//按照指定长度对字符串进行折行处理
	$str = "An example on a long word is: Supercalifragulistic";
	echo wordwrap($str,15,'<br>',true);
	echo '<hr>';
	//随机打乱字符串中所有字符
	$str = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
	echo str_shuffle($str);
	echo '<hr>';
	//将字符串解析成变量
	parse_str("id=23&name=John%20Adams",$myArray);
	print_r($myArray);
	echo '<hr>';
	//通过千分位符格式化数字
	echo number_format(100000000000,2,'.',',');//参数说明：要格式化的数字|规定多少个小数|规定用作小数点的字符串|规定用作千位分隔符的字符串
	echo '<hr>';

	//=================================字符串生成与转化=================================
	

	//====================================大小写转换====================================
	
	//字符串转换为小写
	echo strtolower('Hello World');
	echo '<hr>';
	//字符串转换为大写
	echo strtoupper('hellow world');
	echo '<hr>';
	//字符串首字母大写
	echo ucfirst('hello world');
	echo '<hr>';
	//字符串每个单词首字符转为大写
	echo ucwords('hello world');
	echo '<hr>';

	//====================================大小写转换====================================
	

	//===================================html标签关联===================================
	
	//把字符转为HTML实体
	$str = "John & <br>'Adams'";
	echo $str;
	echo '<br>';
	echo htmlentities($str);
	echo '<hr>';
	//预定义字符转html编码
	$str = "aaa\nlll";
	echo htmlspecialchars($str);
	echo '<hr>';
	//\n转义为<br>标签
	echo nl2br("aaa\nlll");
	echo '<hr>';
	//剥去 HTML、XML 以及 PHP 的标签
	$str = "Hello <b>world!</b>";
	echo $str;
	echo '<br>';
	echo strip_tags($str);
	echo '<hr>';
	//在指定的字符前添加反斜线转义字符串中字符
	$str = "Hello, my name is John Adams.";
	echo $str;
	echo '<br>';
	echo $str = addcslashes($str,'m');
	echo '<hr>';
	//删除由addcslashes()添加的反斜线
	echo $str;
	echo '<br>';
	echo $str = stripcslashes($str);
	echo '<hr>';
	//指定预定义字符前添加反斜线
	$str = "Who's John Adams?";
	echo $str = addslashes($str);
	echo '<hr>';
	//删除由addslashes()添加的转义字符
	echo stripslashes($str);
	echo '<hr>';
	//在字符串中某些预定义的字符前添加反斜线
	$str = "Hello world. (can you hear me?)";
	echo quotemeta($str);
	echo '<hr>';
	//从指定的 ASCII 值返回字符
	echo chr(0541);
	echo '<hr>';
	//返回字符串第一个字符的 ASCII 值
	echo ord('string');
	echo '<hr>';

	//===================================html标签关联===================================
	

	//====================================字符串比较====================================
	
	//不区分大小写比较两字符串
	echo strcasecmp('str1', 'str2');
	echo '<hr>';
	//区分大小写比较两字符串
	echo strcmp('sTr1', 'stR2');
	echo '<hr>';
	//比较字符串前n个字符,区分大小写
	echo strncmp('sTr1', 'StR2', 3);
	echo '<hr>';
	// 比较字符串前n个字符,不区分大小写
	echo strncasecmp('str1', 'str2', 3);
	echo '<hr>';
	//自然顺序法比较字符串长度,区分大小写
	echo strnatcmp('Str1', 'AsTr2');
	echo '<hr>';
	// 自然顺序法比较字符串长度,不区分大小写
	echo strnatcasecmp('str1', 'STR2');
	echo '<hr>';

	//====================================字符串比较====================================
	

	//=================================字符串切割与拼接=================================
	
	//将字符串分成小块
	echo chunk_split($str,3,' ');
	echo '<hr>';
	//切开字符串
	echo strtok($str, ' ');
	echo '<hr>';
	//使用一个字符串为标志将另一个字符串分割成数组
	$array = explode(' ', $str);
	print_r($array);
	echo '<hr>';
	//将数组用预定义字符连接成字符串
	echo implode(' ', $array);
	echo '<hr>';
	//字符串截取
	echo substr($str, 2);
	echo '<hr>';
	//=================================字符串切割与拼接=================================
	

	//==================================字符串查找替换==================================
	
	// 字符串替换操作,区分大小写
	$str = 'Xu';
	echo $str.'<br>';
	echo $str = str_replace('u', 'x', $str);
	echo '<hr>';
	//字符串替换操作，不区分大小写
	echo str_ireplace('x', 'r', $str);
	echo '<hr>';
	//统计一个字符串，在另一个字符串中出现的次数
	echo substr_count($str, 'x');
	echo '<hr>';
	//替换字符串中某串，为另一个字符串
	$str = "Don't take it run away";
	echo $str.'<br>';
	echo str_replace("Don't t", 'T', $str);
	echo '<hr>';
	//返回两字符串相同字符的数量
	$str1 = 'abcd';
	$str2 = 'abce';
	echo similar_text($str1, $str2);
	echo '<hr>';
	//返回一个字符串在另一个字符串中最后一次出现位置开始到末尾的字符串
	$str = 'abcDefghijklabcdefg';
	$restr = 'cd';
	echo strrchr($str, $restr);
	echo '<hr>';
	//返回一个字符串在另一个字符串中开始位置到结束的字符串，区分大小写
	echo strstr($str, $restr);
	echo '<hr>';
	//strstr()的别名,返回一个字符串在另一个字符串中首次出现的位置开始到末尾的字符串，区分大小写
	echo strchr($str,$restr);
	echo '<hr>';
	//返回一个字符串在另一个字符串中开始位置到结束的字符串，不区分大小写
	echo stristr($str, $restr);
	echo '<hr>';
	//转换字符串中的某些字符
	echo strtr($str, 'h', 'Q');//参数说明：目标字符串|被替换的字符|替换字符
	echo "<hr>";
	//寻找字符串中某字符最先出现的位置，区分大小写
	echo strpos($str, 'd');
	echo '<hr>';
	//寻找字符串中某字符最先出现的位置，不区分大小写
	echo stripos($str, 'd');
	echo '<hr>';
	//寻找某字符串中某字符最后出现的位置，区分大小写
	echo strrpos($str, 'D');
	echo '<hr>';
	//寻找某字符串中某字符最后出现的位置，不区分大小写
	echo strripos($str, 'D');
	echo '<hr>';
	//返回字符串中从第一个位置起，符合mask的子字符串长度
	$str = 'fgabcdefghiABCDefghi';
	$mask = 'fg';
	echo strspn($str, $mask);
	echo '<hr>';
	//返回字符串中从第一个位置起，不符合mask的子字符长度
	$str = 'abcdefghiABCDefghi';
	$mask = 'fg';
	echo strcspn($str, $mask);
	echo '<hr>';

	//==================================字符串查找替换==================================
	

	//====================================字符串统计====================================
	
	//统计字符串含有的单词数
	$str = 'How men first learnt to invent words is unknown;';
	echo str_word_count($str);
	echo '<hr>';
	//统计字符串的长度
	echo strlen($str);
	echo '<hr>';
	//统计字符串中所有字母出现次数0~255
	$str = "1234567890-=`~qwertyuiop[]|\asdfghjkl;':/zxcvbnm,./<>?!@#$%^&*()_+QWERTYUIOPLKJHFGASDZXCVBNM";
	print_r(count_chars($str));
	echo '<hr>';

	//====================================字符串统计====================================
	

	//====================================字符串统计====================================
	
	//字符串md5()编码
	$str = 'abcdef';
	echo md5($str);
	echo '<hr>';
	//多节字符串截取
	echo mb_substr($str, 3);//从下标为3(包括3)的字符开始截取
	echo '<hr>';
	//统计多节字符串长度
	echo mb_strlen($str);

	//====================================字符串统计====================================





?>
