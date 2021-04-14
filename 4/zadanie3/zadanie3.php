<form action="" method="post">

Ilosc Osob: 	<select name="iloscOs">
					<option value="1">1</option><option value="2">2</option>
					<option value="3">3</option><option value="4">4</option>
				</select><br>
Imie: 			<input name="imie" size=7 type="text" required><br>
Nazwisko: 		<input name="nazwisko" size=17 type="text" required><br>
Numer karty: 	<input name="nr" maxlength=16 size=13 type="text" required><br>
Osoba palaca: 	<input name="palaca" type="checkbox"><br>
Udogodninie: 	<select name="udogodnienie" name="udogodnienie" >
					<option value="Klima">Klimatyzacja<option disabled selected></option><option value="Basen">Basen<option disabled selected></option>
					<option value="Sauna">Sauna<option disabled selected></option>
				</select><br>


<input type="submit" name="submit">

</form>

<?php

if(isset($_POST['submit']))
	{
	$napis = $_POST['iloscOs']. "\n". $_POST['imie']. "\n". $_POST['nazwisko']. "\n". $_POST['nr']. "\n". $_POST['udogodnienie'];
	if(!$plik = fopen('./zadanie3.csv', 'a'))
	{
	echo("Nie moge otworzyc pliku");
	}
	else
	{
		if(fwrite($plik, $napis) === false)
		{
			echo("zapis nie zostal dokonany");
		}	
		else
		{
			echo("zapisano pomyslnie");
		}
		fclose($plik);
	}
}

?>