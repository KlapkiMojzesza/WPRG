<?php

maxNum();

function maxNum() 
{
	$tablica = array(2, 5, 6, 3, 8, 4, 2, 1);
	$max = $tablica[0];
	
for ($i = 0; $i < 8; $i++)
{
	if ($tablica[$i] > $max)
	{
		$max = $tablica[$i];
	}
}

$j = 0;
while ($j < 8)
{
	if ($tablica[$j] > $max)
	{
		$max = $tablica[$j];
	}	
$j++;
}

$k = 0;
do
{
	if ($tablica[$k] > $max)
	{
		$max = $tablica[$k];
	}	
	$k++;
}while($k < 8);
	
foreach ($tablica as $maxx)
{
	if ($maxx[$k] > $max)
	{
		$max = $maxx;
	}	
}

	echo($max);
    return $max;
}

?>