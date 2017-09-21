<?php
	header("Content-Type:text/html;charset=utf-8");
	echo '<b>数组函数</b>';
	echo '<hr>';


	//=====================================数组创建=====================================

	//生成一个数组
	$arr = array();
	print_r($arr);
	echo '<hr>';
	//生成一个数组，用一个数组值作为键名，另一个数组值作为值
	$arr1 = array('name','age','sex');
	$arr2 = array('lilei','12','man');
	$arr = array_combine($arr1, $arr2);
	print_r($arr);
	echo '<hr>';
	//创建并返回一个包含指定范围的元素的数组
	$arr = range(0, 20,2);//参数说明：最小值|最大值|步长
	print_r($arr);
	echo '<hr>';
	//创建一个由参数所带变量组成的数组
	$firstname = "Peter";
	$lastname = "Griffin";
	$age = "38";
	$result = compact("firstname", "lastname", "age");
	print_r($result);
	echo '<hr>';
	//用给定的值填充数组
	$arr = array_fill(0, 2, 'value');//参数说明：初始键值|填充数量|填充值
	print_r($arr);
	echo '<hr>';

	//=====================================数组创建=====================================


	//==================================数组合并和拆分==================================

	//把一个数组分割为新的数组块
	$arr = array(1,2,3,4,5,6,7,8);
	$arr = array_chunk($arr, 2);
	print_r($arr);
	echo '<hr>';
	//把两个或多个数组合并为一个数组
	$arr1 = array(1,2);
	$arr2 = array(3,4);
	$arr3 = array(5,6);
	$arr = array_merge($arr1,$arr2,$arr3);
	print_r($arr);
	echo '<hr>';
	//在数组中根据条件取出一段值，并返回。
	$arr = array_slice($arr, 1, 2);
	print_r($arr);
	echo '<hr>';

	//==================================数组合并和拆分==================================


	//=====================================数组比较=====================================
	
	//返回两个数组的差集数组
	$arr1 = array(1,2,3,4,8);
	$arr2 = array(1,2,3,4,6,7);
	$arr = array_diff($arr1, $arr2);//返回$arr1中不同于$arr2的数组
	print_r($arr);
	echo '<hr>';
	//返回两个或多个数组的交集数组
	$arr1 = array(1,2,3,4);
	$arr2 = array(4,5,6);
	$arr = array_intersect($arr1, $arr2);//返回$arr1中与$arr2中相同的数组
	print_r($arr);
	echo '<hr>';

	//=====================================数组比较=====================================


	//===================================数组查找替换===================================

	//在数组中查找一个值，返回一个键，没有返回false
	$arr = array(1,2,3,4,5);
	$arr = array_search(3, $arr);
	echo $arr;
	echo '<hr>';
	//把数组中一部分删除用其他值代替
	$arr1 = array(1,2,3,4,5,6,7,8);
	$arr2 = array('a','b','c','d','e',);

	array_splice($arr1,2,5,$arr2);//参数说明：原数组|起始下标|删除个数|替换数组
	print_r($arr1);
	echo '<br>';
	$arr1 = array(1,2,3,4,5,6,7,8);
	array_splice($arr1,2,3,$arr2);
	print_r($arr1);
	// $a1=array(0=>"Dog",1=>"Cat",2=>"Horse",3=>"Bird");
	// $a2=array(0=>"Tiger",1=>"Lion");
	// array_splice($a1,0,2,$a2);
	// print_r($a1);
	echo '<hr>';
	//返回数组中所有值的总和
	$arr = array(1,2,3,4,5);
	echo array_sum($arr);
	echo '<hr>';
	//在数组中搜索给定的值，区分大小写
	$arr = array('a','b','c','d');
	echo in_array('a', $arr);
	echo '<hr>';
	//判断某个数组中是否存在指定的key
	$arr = array('name'=>'lilei','age'=>'12','sex'=>'man');
	echo array_key_exists('age', $arr);
	echo '<hr>';

	//===================================数组查找替换===================================


	//===================================数组指针操作===================================

	//返回数组内部指针当前指向元素的键名
	$arr = array('s'=>'w',2,3,4,5);
	print_r(key($arr));
	echo '<hr>';
	//返回数组中的当前元素，别名pos()
	echo current($arr);
	echo '<hr>';
	//把指针移动到下一个元素，并返回当前元素的值
	echo next($arr);
	echo '<hr>';
	//把指针移动到上一个元素，并返回当前元素的值
	echo prev($arr);
	echo '<hr>';
	//将数组指针指向最后一个元素，并返回该元素的值
	echo end($arr);
	echo '<hr>';
	//把数组指针指向第一个元素，并返回该元素的值
	echo reset($arr);
	echo '<hr>';
	//用数组中的元素为一组变量赋值
	$arr = array('w',2,'s');
	list($a,$b,$c) = $arr;
	echo $a.$b.$c;
	echo '<hr>';
	//删除数组中的第一个元素，并返回被删除的值
	echo array_shift($arr);
	echo '<hr>';
	//在数组开头插入一个元素或多个元素
	array_unshift($arr, 'vasr');
	print_r($arr);
	echo '<hr>';
	//向数组最后压入一个或多个元素
	array_push($arr, 'var','aa');
	print_r($arr);
	echo '<hr>';
	//删除数组最后一个元素
	array_pop($arr);
	print_r($arr);
	echo '<hr>';

	//===================================数组指针操作===================================


	//===================================数组键值操作===================================

	//将数组打乱，不保留键名
	shuffle($arr);
	print_r($arr);
	echo '<hr>';
	//计算数组中的单元数目或对象中的属性个数
	echo count($arr);
	echo '<hr>';
	//返回一个键值反转后的数组
	$arr = array_flip($arr);
	print_r($arr);
	echo '<hr>';
	//返回数组所有的键，组成一个数组
	$arr = array(1,2,3,4);
	$arr = array_keys($arr);
	print_r($arr);
	echo '<hr>';
	//返回数组中所有值，组成一个数组
	$arr = array('a','b','c');
	$arr = array_values($arr);
	print_r($arr);
	echo '<hr>';
	//返回一个元素顺序相反的数组
	$arr = array(1,2,3,4);
	$arr = array_reverse($arr);
	print_r($arr);
	echo '<hr>';
	//统计数组中所有的值出现的次数
	$arr = array('a','q','w','s','d','a','v','d','s','e','w');
	$arr = array_count_values($arr);
	print_r($arr);
	echo '<hr>';
	//从数组中随机取出一个或多个元素，注意是键名
	$arr = array('a','b','c','d');
	$arr = array_rand($arr);
	print_r($arr);
	echo '<hr>';
	//返回当前元素的键名和键值，并将内部指针向前移动
	$arr = array('a','b','c','d');
	next($arr);//先将指针向下移动一行
	$arr = each($arr);
	print_r($arr);
	echo '<hr>';
	//删除重复值，返回剩余数组
	$arr = array('a','q','w','s','d','a','v','d','s','e','w');
	print_r($arr);
	echo '<br>';
	$arr = array_unique($arr);
	print_r($arr);
	echo '<hr>';

	//===================================数组键值操作===================================


	//=====================================数组排序=====================================

	//按升序对给定数组的值排序，不保留键名
	$arr = array(2,4,5,3,1);
	sort($arr);
	print_r($arr);
	echo '<hr>';
	//对数组逆向排序，不保留键名
	$arr = array(2,4,5,3,1);
	rsort($arr);
	print_r($arr);
	echo '<hr>';
	//对数组排序，保持索引关系
	$arr = array('e'=>2,4,'s'=>5,3,1);
	asort($arr);
	print_r($arr);
	echo '<hr>';
	//对数组逆向排序，保持索引关系
	$arr = array('e'=>2,4,'s'=>5,3,1);
	arsort($arr);
	print_r($arr);
	echo '<hr>';
	//按键名对数组排序
	$arr = array('e'=>2,4,'s'=>5,3,1);
	ksort($arr);
	print_r($arr);
	echo '<hr>';
	//按键名对数组逆向排序
	$arr = array('e'=>2,4,'s'=>5,3,1);
	krsort($arr);
	print_r($arr);
	echo '<hr>';
	//用自然顺序算法对数组中的元素排序
	$arr = array('e'=>2,4,5=>'s',6=>'S',3,1);
	natsort($arr);
	print_r($arr);
	echo '<hr>';
	//用自然顺序算法对数组中的元素排序，不区分大小写
	$arr = array('e'=>2,4,5=>'s',6=>'S',3,1);
	natcasesort($arr);
	print_r($arr);
	echo '<hr>';




	
	//=====================================数组排序=====================================


?>