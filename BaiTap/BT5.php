<?php

    echo "<br />";
    echo "Tính tổng giá trị dương trong mảng 1 chiều các số thực <br />";

    $n = 10;
    $min = -50;
    $max = 100;
    $a = ramdomFloat5($min, $max , $n);
    foreach ($a as $value) {
        echo $value . "<br />";
    }
    $sum = sumFloat($a);
    
    echo "Tổng giá trị dương của mảng số thực là: " . $sum . "<br />";


    function ramdomFloat5($min, $max, $n) {
        for ($i = 0; $i < $n; $i++) {
            $float_part = mt_rand(0, mt_rand())/ mt_getrandmax();
            $integer_part = mt_rand($min, $max );   
            $a[] = $integer_part + $float_part;
        }
        return $a;
    }

    function sumFloat($a) {
        $sum = 0;
        foreach ($a as $value) {
            if ($value >= 0) {
                $sum += $value;
                echo $value . "<br />";
            }
        }
        return $sum;
    }


?>