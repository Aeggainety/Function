<?php
	header("Content-Type:text/html;charset=utf-8");
	echo '<b>数据库</b>';
	echo '<hr>';


	//创建一个数据库
	echo 'create database <数据库名>';
	echo '<hr>';

	//删除一个数据库
	echo 'drop database <数据库名>';
	echo '<hr>';

	//创建一个数据表
	echo 'create table 表名(字段名 列类型 [属性][索引])[表类型][表字符集]';
	echo '<hr>';

	//修改数据表信息
	echo 'alter table <表名> action';
	echo '<hr>';

	//在数据表中插入数据
	echo "insert into 表名[(字段名1，字段名2...)] value('值1','值2')";
	echo '<hr>';

	//更新数据表中存在的数据
	echo "update 表名 set 字段名=表达式[..] [where 条件]";
	echo '<hr>';

	//删除数据表中指定数据
	echo "delete from 表名 [where  条件]";
	echo '<hr>';

	//连接数据库
	echo "mysql_content('主机名','用户名','密码',['数据库名称'])";
	echo '<hr>';

	//关闭数据库
	echo "mysql_close()";
	echo '<hr>';

	//选择数据库
	echo "mysql_select_db()";
	echo '<hr>';

	//返回SQL语句执行结果
	echo "mysql_query()";
	echo '<hr>';

	//返回普通索引数组
	echo "mysql_fetch_row()";
	echo '<hr>';

	//返回普通关联数组
	echo "mysql_fetch_assoc()";
	echo '<hr>';

	//返回索引和管理数组
	echo "mysql_fetch_array()";
	echo '<hr>';

	//返回字符串中从第一个位置起，符合mask的子字符串长度
	$str = 'acbanana';
	$mask = 'ace';
	
	echo strspn($str, $mask);
	echo '<hr>';



?>