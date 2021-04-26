<?php 
	session_start(); 
?>
<form action="" method="post">

Ilosc Osob: 	<select name="iloscOs">
					<option value=1>1</option><option value=2>2</option>
					<option value=3>3</option><option value=4>4</option>
				</select><br>
Imie: 			<input name="imie[0]" size=7 type="text" required><br>
Nazwisko: 		<input name="nazwisko[0]" size=17 type="text" required><br>
Numer karty: 	<input name="nr[0]" maxlength=16 size=13 type="text" required><br>

<input type="submit" name="submit">

</form>

<?php
if(isset($_POST['submit']))
{
	if(isset($_POST['iloscOs']))
	{
		$_SESSION['iloscOsob'] = $_POST['iloscOs'];
		$_SESSION['imienia'] = array($_POST['iloscOs']);
		$_SESSION['nazwiska'] = array($_POST['iloscOs']);
		$_SESSION['numery'] = array($_POST['iloscOs']);
		
		$_SESSION['imienia'][0] = $_POST['imie'][0];
		$_SESSION['nazwiska'][0] = $_POST['nazwisko'][0];
		$_SESSION['numery'][0] = $_POST['nr'][0];
	}
}
?>

<a href="index2.php"><input type="button" name="button" value="przejdz do strony 2"/></a>