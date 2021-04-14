<form action="" method="post">
<input name="skladnik1" type="number">
<input name="skladnik2" type="number"> 

<select name="dzialanie">

	 <option value="1">+</option><option value="2">-</option>
	 <option value="3">*</option><option value="4">/</option>
</select>


<input type="submit" name="submit" value="POLICZ">

</form>

<?php
include 'zadanie1 dzialania.php';
if(isset($_POST['submit']))
{
	switch ($_POST['dzialanie'])
	{
		case "1":
		dodaj($_POST['skladnik1'], $_POST['skladnik2']);
		break;
		case "2":
		odejmij($_POST['skladnik1'], $_POST['skladnik2']);
		break;
		case "3":
		pomnoz($_POST['skladnik1'], $_POST['skladnik2']);
		break;
		case "4":
		podziel($_POST['skladnik1'], $_POST['skladnik2']);
		break;
	}
}

?>