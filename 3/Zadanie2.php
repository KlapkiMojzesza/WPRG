<form action="" method="post">

Ilosc Osob: <select name="iloscOs">
	 <option value="1">1</option><option value="2">2</option>
	 <option value="3">3</option><option value="4">4</option>
</select><br>
Imie: <input name="imie" size=7 type="text" required><br>
Nazwisko: <input name="nazwisko" size=17 type="text" required><br>
Numer karty: <input name="nr" maxlength=16 size=13 type="text" required><br>
Osoba palaca: <input name="palaca" type="checkbox"><br>
Udogodninie: <select name="udogodnienie" name="udogodnienie" >
	 <option value="Klima">Klimatyzacja<option disabled selected></option><option value="Basen">Basen<option disabled selected></option>
	 <option value="Sauna">Sauna<option disabled selected></option>
</select><br>


<input type="submit" name="submit">

</form>

<?php
if(isset($_POST['submit']))
{
	echo "Osob: ".$_POST['iloscOs'];
	echo "<br>Imie: ".$_POST['imie'];
	echo "<br>Nazwisko: ".$_POST['nazwisko'];
	echo "<br>Nr Karty: ".$_POST['nr'];
	if(isset($_POST['palaca']))
{
	echo "<br>Osoba palaca";
}
	echo "<br>Udogodninie: ".$_POST['udogodnienie'];
}

?>
