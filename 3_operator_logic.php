<?php
function logic($pertama, $kedua) {
   
    $nilai = 0;

   
    while ($pertama >= $kedua) {
        $pertama-= $kedua; 
        $nilai++; 
    }

    return $nilai;
}

$pertama = 7;
$kedua = 2;

$result = logic($pertama, $kedua);
echo $result; 
?>