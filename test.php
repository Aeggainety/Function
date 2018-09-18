<?php
	echo 'hello world<br>';
	$a=1;
	$b=0;
	for($i=1;$i<=10;$i++){
		$b +=$a;
		echo $b.'<br>';
	}

	echo '<hr>';

	$str = 'aBcDeFgHiJkLmNoPqRsTuVwXyZ0123456789.';

	$password = '';

	for ($i=0;$i<=12;$i++)
	{
		$password .= $str[mt_rand(0,strlen($str)-1)];
	}
	echo $password;
	echo '<hr>';
	echo md5($password);
	echo '<hr>';
	echo md5(md5($password));

?>