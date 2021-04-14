<form action="" method="post">
<input name="text" type="text">

<input type="submit" name="submit" value="ZAPISZ">

</form>
<?php

if(isset($_POST['submit']))
	{
	$napis = $_POST['text']."\n";
	if(!$plik = fopen('./zadanie2.txt', 'a'))
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