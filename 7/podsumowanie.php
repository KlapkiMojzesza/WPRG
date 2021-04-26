<?php
session_start();
for ($i = 0; $i < $_SESSION['iloscOsob']; $i++)
{
	echo $_SESSION['imienia'][$i]."<br>";
	echo $_SESSION['nazwiska'][$i]."<br>";
	echo $_SESSION['numery'][$i]."<br><br>";
}
?>




