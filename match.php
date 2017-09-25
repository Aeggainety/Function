<?php
	header("Content-Type:text/html;charset=utf-8");
	echo '<b>正则</b>';
	echo '<hr>';


	//=====================================匹配范围=====================================

	// $str = 'r52e4g6c32e68r4w53wee35d4f68v6s3df1we5Q5EF13sdv8rw6V546VefFWFiuh87c3hIUEHC83h';
	//匹配任意一个十进制数字
	$str = '34';
	var_dump(preg_match('/\d/', $str));
	echo '<hr>';
	
	//匹配除十进制数字以外的任意数字
	$str = 's3';
	var_dump(preg_match('/\D/', $str));
	echo '<hr>';
	
	//匹配空白字符
	$str = 'kd d';
	var_dump(preg_match('/\s/', $str));
	echo '<hr>';

	//匹配除空白字符以外的任意一个字符
	$str = 'adse';
	var_dump(preg_match('/\S/', $str));
	echo '<hr>';

	//匹配任意一个数字、字母和下划线
	$str = 'io23f';
	var_dump(preg_match('/\w/', $str));
	echo '<hr>';

	//匹配除字母、数字和下划线以外的任意字符
	$str = 'io23f';
	var_dump(preg_match('/\W/', $str));
	echo '<hr>';

	//1、用来表示范围。2、匹配任意一个中括号中定义的原子
	$str = 'io23f';
	var_dump(preg_match('/[o2]/', $str));
	echo '<hr>';

	//中括号里面的^(抑扬符)：表示匹配任意一个除中括号里面定义的原子
	$str = 'io23f';
	var_dump(preg_match('/[^io23f]/', $str));
	echo '<hr>';

	//=====================================匹配范围=====================================
	


	//=====================================限定次数=====================================
	
	//匹配0次、1次或多次其前的原子
	$str = 'io23f';
	var_dump(preg_match('/\d*/', $str));
	echo '<hr>';

	//匹配一次或多次其前的原子
	$str = 'io23f';
	var_dump(preg_match('/o+/', $str));
	echo '<hr>';

	//匹配0次或1次其前的原子
	$str = 'r52e4g6c32e68r4w53wee35d4f68v6s3df1we5Q5EF13sdv8rw6V546VefFWFiuh87c3hIUEHC83h';
	var_dump(preg_match('/r{0,1}/', $str));
	echo '<hr>';

	//表示其前的原子正好出现N次
	$str = 'r5r5r5r52e4g6c32e68r4w53wee35d4f68v6s3df1we5Q5EF13sdv8rw6V546VefFWFiuh87c3hIUEHC83h';
	var_dump(preg_match('/r5{1}/', $str));
	echo '<hr>';

	//表示其前的原子至少出现n次，最多不限制
	$str = 'r5r5r5r52e4g6c32e68r4w53wee35d4f68v6s3df1we5Q5EF13sdv8rw6V546VefFWFiuh87c3hIUEHC83h';
	var_dump(preg_match('/r5{1,}/', $str));
	echo '<hr>';

	//表示其前的原子最少出现m次，最多出现n次
	$str = 'r5r5r5r52e4g6c32e68r4w53wee35d4f68v6s3df1we5Q5EF13sdv8rw6V546VefFWFiuh87c3hIUEHC83h';
	var_dump(preg_match('/r5{1,3}/', $str));
	echo '<hr>';

	//=====================================限定次数=====================================



	//=======================================其他=======================================
	
	//匹配除换行符(\n)以外的任意字符【windows下还匹配\f\r】
	$str = 'r5r5r5r52e4g6c32e68r4w53wee35d4f68v6s3df1we5Q5EF13sdv8rw6V546VefFWFiuh87c3hIUEHC83h';
	var_dump(preg_match('/./', $str));
	echo '<hr>';

	//两个或多个分支选择【优先级最低】
	$str = 'r5r5r5r52e4g6c32e68r4w53wee35d4f68v6s3df1we5Q5EF13sdv8rw6V546VefFWFiuh87c3hIUEHC83h';
	var_dump(preg_match('/|/', $str));
	echo '<hr>';

	//匹配输入字符的开始位置
	$str = 'r5r5r5r52e4g6c32e68r4w53wee35d4f68v6s3df1we5Q5EF13sdv8rw6V546VefFWFiuh87c3hIUEHC83h';
	var_dump(preg_match('/^\d/', $str));
	echo '<hr>';

	//匹配输入字符的结束位置
	$str = 'r5r5r5r52e4g6c32e68r4w53wee35d4{[f68v6s3df1we5Q5}]EF13sdv8rw6V546VefFWFiuh87c3hIUEHC83h';
	var_dump(preg_match('/^\d$/', $str));
	echo '<hr>';

	//匹配词边界
	$str = ']r5r5r5r52e4g6c32e68r4w53wee35d4{[f68v6s3df1we5Q5}]EF13sdv8rw6V546VefFWFiuh87c3hIUEHC83h';
	var_dump(preg_match('/\b/', $str));
	echo '<hr>';

	//匹配非词边界
	$str = ']r5r5r5r52e4g6c32e68r4w53wee35d4{[f68v6s3df1we5Q5}]EF13sdv8rw6V546VefFWFiuh87c3hIUEHC83h';
	var_dump(preg_match('/\B/', $str));
	echo '<hr>';

	//1)模式单元，把多个小原子组成一个大原子。2)可以改变优先级
	$str = ']r5r5r5r52e4g6c32e68r4w53wee35d4{[f68v6s3df1we5Q5}]EF13sdv8rw6V546VefFWFiuh87c3hIUEHC83h';
	var_dump(preg_match('/(\d)/', $str));
	echo '<hr>';

	//=======================================其他=======================================


?>