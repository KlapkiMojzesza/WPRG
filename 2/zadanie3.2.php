<?php
Kostka(4);

function Kostka(int $nr) 
{
$tablica = array();
for ($i = 0; $i < $nr; $i++)
{
	$tablica[$i] = rand ( 1 , 6 );
	echo($tablica[$i]);
}
}
?>