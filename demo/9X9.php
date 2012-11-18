<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>
</head>
<body>
<?php

//99乘法表
//从1到9
	for($i=1; $i<=9; $i++)
	{
		for($j=1; $j<=$i; $j++)
		{
			//if($j <=$i){
				echo $j . "*" . $i . "=" .($i*$j) . " | " ;
			//};
		}
		echo "<br>";
	}

	echo "<hr>";

	for($i=9; $i>=1; $i--)
	{
		for($j=1; $j<=$i; $j++)
		{
			//if($j <=$i){
				echo $i . "*" . $j . "=" .($i*$j) . " | " ;
			//};
		}
		echo "<br>";
	}


?>
</body>
</html>