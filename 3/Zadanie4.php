<form action="" method="post">
<input name="liczba" type="number">

<input type="submit" name="submit">

</form>

<?php
if(isset($_POST['submit']))
{
if($_POST['liczba'] >= 0){
echo if_prime($_POST['liczba']);
}
}
function if_prime($prime){
    $counter = 1;
    if ($prime == 1)
        return("<br>Liczba ".$prime." nie jest pierwszą"."<br>Liczba iteracji : ".$counter);
    for ($i = 2; $i <= sqrt($prime); $i++){
        if($prime % $i == 0)
            return("<br>Liczba ".$prime." nie jest pierwszą"."<br>Liczba iteracji : ".$counter);
        $counter++;
    }
    return ("<br>Liczba ".$prime." jest pierwszą"."<br>Liczba iteracji : ".$counter);


}

?>
