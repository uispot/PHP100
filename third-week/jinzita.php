<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>
</head>
<body>

<?php
//金字塔
for($i=1; $i<10; $i++){
	for($k=1; $k<10-$i; $k++){
			echo "&nbsp;";
		}
	for($j=1; $j<$i; $j++){
		echo "*";
	}
	echo "<br>";
}

echo "<hr>";
//
for($a=1; $a<10; $a++){
	for($c=1; $c<((10-$a)); $c++){
			echo "1";
		}
	for($b=1; $b<=$a; $b++){
		echo "<font color='red'>*</font>1";
	}
	echo "<br>";
}
for($a=8; $a>=1; $a--){
	for($c=1; $c<((10-$a)); $c++){
			echo "1";
		}
	for($b=1; $b<=$a; $b++){
		echo "<font color='red'>*</font>1";
	}
	echo "<br>";
}

?>
	
</body>
</html>