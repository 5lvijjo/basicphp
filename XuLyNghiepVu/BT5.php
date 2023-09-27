<?php

    echo "<br />";
    echo "2. Tính chu vi tam giác <br />";
    
    $a = 3;
    $b = 4;
    $c = 7;
    $cV= chuVi($a, $b, $c);
    echo "Chu vi tam giác là " . $cV . "<br />";

    function chuVi($a, $b, $c){
        $cV = $a + $b + $c;
        return $cV;
    }












?>