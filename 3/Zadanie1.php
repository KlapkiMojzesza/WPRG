<form action="" method="post">
<input name="skladnik1" type="number">
<input name="skladnik2" type="number"> 

<select name="dzialanie">

	 <option value="1">+</option><option value="2">-</option>
	 <option value="3">*</option><option value="4">/</option>
</select>


<input type="submit" name="submit">

</form>

<?php
if(isset($_POST['submit']))
{
if($_POST['dzialanie'] == "1"){
		echo $_POST['skladnik1'] + $_POST['skladnik2'];
	}
if($_POST['dzialanie'] == "2"){
		echo $_POST['skladnik1'] - $_POST['skladnik2'];
	}
if($_POST['dzialanie'] == "3"){
		echo $_POST['skladnik1'] * $_POST['skladnik2'];
	}
if($_POST['dzialanie'] == "4"){
		echo $_POST['skladnik1'] / $_POST['skladnik2'];
	}


}

?>
