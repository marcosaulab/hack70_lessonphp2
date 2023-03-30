<?php

$val = 4;

function incrementaRiferimento(&$num) {
    $num++;
}

incrementaRiferimento($val);

echo $val; 

?>