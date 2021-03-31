<?php
Kostka(4);

function Kostka(int $nr) 
{
$tablica = array();
for ($i = 0; $i < $nr; $i++)
{
	for ($j = 0; $j < $nr; $j++)
	{
	echo ($tablica[$i][$j] = ($i + 1) * ($j + 1)."\t");
	}
}

}
?>