<?php
define('PI',3.14);
function add($num1,$num2)
{
	$var1=$num1;
	$var2=$num2;
	$result = $var1 + $var2;
	return $result;
}
echo "2 And 4 Sum Are:<br>".add(2,4);
/*
function hello(){
	print("<br>helllooo");
}
hello()
*/
if(add(2,4)==6){
	echo "<br><h1>duniya Moh maya nhi hai</h1>";
}
else{
	echo "Duniya moh maya hai";
}
echo PI;
?>





