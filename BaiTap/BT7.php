<?php

    echo "<br />";
    echo "Viết chương trình chuyển đổi từ hệ cơ số 2 sang hệ cơ số 10 <br />";

    $a = 10101001;
    $trans = doiCoSo($a);
    echo $trans. "<br />";


    function doiCoSo($a) {
        $array = [];
        $b = $a;
        $loop = true;
        while($loop) {
            $c = $b % 2;
            $array [] = $c;
            $b = floor($b / 10);
            if($b == 0) {
                $loop = false;
            }
        }
        foreach ($array as $tc) {
            echo $tc . "<br />";
        }
        $soCoSo10 = 0;
        foreach ($array as $key => $value) {
            $tongtam = pow(2, $key) * $value;
            $soCoSo10 += $tongtam;
        }
        return $soCoSo10;
    }












?>