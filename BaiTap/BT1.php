<?php

    echo "Tính S(n) = 1 + 1.2 + 1.2.3 + ....+ 1.2....N <br />";
    
    $n = 4;
    $sum = TongSn($n);
    echo "Tổng S(n) là :" . $sum . "<br />";


    function TongSn ($n) {
        $sum = 0;
        $c = 1;
        for ($i = 1; $i <= $n; $i++) {
            $c *= $i;
            $sum += $c;
        }
        return $sum;
    }






?>