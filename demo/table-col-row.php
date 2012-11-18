<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>
</head>
<body>

<?php
//隔行变色
echo "<table border='1' cellspacing='1' width='500' height='400'>";
echo "<caption>隔行变色</caption>";
for($i=1; $i<=10; $i++){  //控制的行数
	if($i%2==1){
		echo "<tr bgcolor='red'>";
	}else{
		echo "<tr bgcolor='blue'>";
	}
		for($j=1; $j<=10; $j++){  //控制的列数
			echo "<td>&nbsp;</td>";
		}
	echo "</tr>";
}
echo "</table>";

echo "<br><br>";

//隔列变色
echo "<table border='1' cellspacing='1' width='500' height='400'>";
echo "<caption>隔列变色</caption>";
for($i=1; $i<=10; $i++){  //控制的行数
	echo "<tr>";
	for($j=1; $j<=10; $j++){  //控制的列数
		if($j%2==1){   
			echo "<td bgcolor='red'>&nbsp;</td>";
		}else{
			echo "<td bgcolor='blue'>&nbsp;</td>";
		}
	}
	echo "</tr>";
}
echo "</table>";

echo "<br><br>";

//隔行隔列变色
echo "<table border='1' cellspacing='1' width='500' height='400'>";
echo "<caption>隔行隔列变色</caption>";
for($i=1; $i<=10; $i++){  //控制的行数
	echo "<tr>";
	for($j=1; $j<=10; $j++){  //控制的列数
		if(($i+$j)%2){   //$j%2 的值只有1和0，1相当于true,0相当于false
			echo "<td bgcolor='red'>&nbsp;</td>";
		}else{
			echo "<td bgcolor='blue'>&nbsp;</td>";
		}
	}
	echo "</tr>";
}
echo "</table>";

echo "<br><br>";

?>
	
</body>
</html>