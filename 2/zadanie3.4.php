<?php
$prime = 2137;
echo if_prime($prime);
$prime = 27;
echo if_prime($prime);
$prime = 1;
echo if_prime($prime);

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