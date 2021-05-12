<?php
if(!$db_lnk = mysqli_connect("localhost","root","","testowa"))
{
	exit('Wystapil blad');
}
else
{
	echo 'Dziala';
}
$query = 'SELECT imie From nazwa';
$result = mysqli_query($db_lnk, $query);
while ($row = mysqli_fetch_row($result))
{
echo"$row[0]";	
}
$query = 'INSERT INTO `nazwa`(`imie`, `nazwisko`) VALUES ("krzys","krzysio")';
if (!$result = mysqli_query($db_lnk, $query))
{
	mysqli_close($db_lnk);
	echo "Krzys nie dodany";
}


if (!mysqli_close($db_lnk))
{
	echo "Blad przy zamknieciu";
}
else
{
	echo "Gitara siema";
}

?> 