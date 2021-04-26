<?php
session_start();
for ($i = 1; $i < $_SESSION['iloscOsob']; $i++)
{
echo "
<form action='' method='post'>

Imie: 			<input name='imie[${i}]' size=7 type='text' required><br>
Nazwisko: 		<input name='nazwisko[${i}]' size=17 type='text' required><br>
Numer karty: 	<input name='nr[${i}]' maxlength=16 size=13 type='text' required><br>

";
}
echo "<input type='submit' name='submit'>";

if(isset($_POST['submit']))
{
	for ($i = 1; $i < $_SESSION['iloscOsob']; $i++)
	{
		$_SESSION['imienia'][$i] = $_POST['imie'][$i];
		$_SESSION['nazwiska'][$i] = $_POST['nazwisko'][$i];
		$_SESSION['numery'][$i] = $_POST['nr'][$i];
	}
}
?>
<a href="podsumowanie.php"><input type="button" name="button" value="podsumowanie"/></a>



