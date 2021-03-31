<!-- W pocie czoła i w rzece łez....staralismy sie -->
<form action="" method="post">
    <select name="1"><option disabled selected></option><option value="O">O</option><option value="X">X</option></select>
    <select name="2"><option disabled selected></option><option value="O">O</option><option value="X">X</option></select>
    <select name="3"><option disabled selected></option><option value="O">O</option><option value="X">X</option></select><br>
    <select name="4"><option disabled selected></option><option value="O">O</option><option value="X">X</option></select>
    <select name="5"><option disabled selected></option><option value="O">O</option><option value="X">X</option></select>
    <select name="6"><option disabled selected></option><option value="O">O</option><option value="X">X</option></select><br>
    <select name="7"><option disabled selected></option><option value="O">O</option><option value="X">X</option></select>
    <select name="8"><option disabled selected></option><option value="O">O</option><option value="X">X</option></select>
    <select name="9"><option disabled selected></option><option value="O">O</option><option value="X">X</option></select>

	
    <input type="submit" name="submit" vlaue="Choose options">
</form>

<?php
error_reporting(0);
echo"Kułko i Kżyrzyk...";
if(isset($_POST['submit']))
{
	if(!empty($_POST['1']) || !empty($_POST['2']) || !empty($_POST['3'])) {
	if($_POST['1'] == $_POST['2']&& $_POST['2'] == $_POST['3']){
		Wygrana($_POST[1]);
	}
	}
		if(!empty($_POST['4']) || !empty($_POST['5']) || !empty($_POST['6'])) {
	if($_POST['4'] == $_POST['5']&& $_POST['5'] == $_POST['6']){
		Wygrana($_POST[4]);
	}
	}
		if(!empty($_POST['7']) || !empty($_POST['8']) || !empty($_POST['9'])) {
	if($_POST['7'] == $_POST['8']&& $_POST['8'] == $_POST['9']){
		Wygrana($_POST[7]);
	}
	}
		if(!empty($_POST['1']) || !empty($_POST['4']) || !empty($_POST['7'])) {
	if($_POST['1'] == $_POST['4']&& $_POST['4'] == $_POST['7']){
		Wygrana($_POST[1]);
	}
	}
		if(!empty($_POST['2']) || !empty($_POST['5']) || !empty($_POST['8'])) {
	if($_POST['2'] == $_POST['5']&& $_POST['5'] == $_POST['8']){
		Wygrana($_POST[2]);
	}
	}
		if(!empty($_POST['3']) || !empty($_POST['6']) || !empty($_POST['9'])) {
	if($_POST['3'] == $_POST['6']&& $_POST['6'] == $_POST['9']){
		Wygrana($_POST[3]);
	}
	}
		if(!empty($_POST['1']) || !empty($_POST['5']) || !empty($_POST['9'])) {
	if($_POST['1'] == $_POST['5']&& $_POST['5'] == $_POST['9']){
		Wygrana($_POST[1]);
	}
	}
		if(!empty($_POST['3']) || !empty($_POST['5']) || !empty($_POST['9'])) {
	if($_POST['3'] == $_POST['5']&& $_POST['5'] == $_POST['9']){
		Wygrana($_POST[3]);
	}
	}
	
}
function Wygrana(string $gracz)
{
		echo ($gracz." wygral");
}
?>


