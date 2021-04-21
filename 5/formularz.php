<form action="formularz" method="post">

Ilosc Osob: 	<select name="iloscOs">
					<option value=1>1</option><option value=2>2</option>
					<option value=3>3</option><option value=4>4</option>
				</select><br>
Imie: 			<input name="imie" size=7 type="text" required><br>
Nazwisko: 		<input name="nazwisko" size=17 type="text" required><br>
Numer karty: 	<input name="nr" maxlength=16 size=13 type="text" required><br>

<input type="submit" name="submit">

</form>

<?php

if(isset($_COOKIE['iloscOs']) && $_COOKIE['iloscOs'] > 1)
{
	$i = 1;
	while ($i<$_COOKIE['iloscOs'] - 1)
	{
		?>
		<form action="formularz" method="post">

Ilosc Osob: 	<select name="iloscOs">
					<option value=1>1</option><option value=2>2</option>
					<option value=3>3</option><option value=4>4</option>
				</select><br>
Imie: 			<input name="imie" size=7 type="text" required><br>
Nazwisko: 		<input name="nazwisko" size=17 type="text" required><br>
Numer karty: 	<input name="nr" maxlength=16 size=13 type="text" required><br>

<input type="submit" name="submit">

</form>
<?php
$i++;
	}

}

else if(isset($_POST['submit']))
{
	if(isset($_POST['iloscOs']))
	{
	setcookie('iloscOs', $_POST['iloscOs']);
	}
	
}
	
?>