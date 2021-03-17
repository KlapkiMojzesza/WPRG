<?php
$figura = "trapez";

$a = 3;
$b = 4;
$c = 5;
$h = 6;


switch ($figura)
{
	case "prostokat":
		echo($a*$b);
	break;
	
	case "trojkat":
		echo(($a*$h)/2);
	break;
	
	case "trapez":
		echo(($a+$b)*$h/2);
	break;
	
}
?>