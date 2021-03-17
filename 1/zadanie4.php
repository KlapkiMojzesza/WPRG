<?php
$pesel = "01 22 07 01319";
$peselArray = explode(" ", $pesel);

if ($peselArray[1] <= 12)
{
	$rok = 1900 + $peselArray[0];
	$miesiac = $peselArray[1];
	$dzien = $peselArray[2];
}
else if ($peselArray[1] >= 21 && $peselArray[1] <= 32)
{
	$rok = 2000 + $peselArray[0];
	$miesiac = $peselArray[1] - 20;
	$dzien = $peselArray[2];
}
else if ($peselArray[1] >= 81 && $peselArray[1] <= 92)
{
	$rok = 1800 + $peselArray[0];
	$miesiac = $peselArray[1] - 80;
	$dzien = $peselArray[2];
}
	echo($dzien. " ". $miesiac. " ". $rok);
?>