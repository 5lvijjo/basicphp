<?php

    echo "<br />";
    echo "Viết hàm tìm giá trị lớn nhất trong mảng 1 chiều các số thực <br />";

    # Cách tạo mảng số thực ??????
    // $n = 10;
    // $a = ramdomArray($n);
    // print_r($a);
    // var_dump($a);
    // foreach($a as $value) {
    //     echo $value. "<br />";
    // }
    $n = 20;
    $min = -100;
    $max = 120;
    $a = ramdomFloat($min, $max, $n);
    foreach ($a as $value) {
        echo $value . "<br />";
    }
    
    $max = maxFloat($a);
    echo "Giá trị lớn nhất trong mảng 1 chiều số thực là: ". $max. "<br />";
    
    
    function ramdomFloat($min, $max, $n) {
        for ($i = 0; $i < $n; $i++) {
            $float_part = mt_rand(0, mt_rand())/ mt_getrandmax();
            $integer_part = mt_rand($min, $max );   
            $a[] = $integer_part + $float_part;
        }
        return $a;
    }

    function maxFloat2($a, $n) {
        $max = 0;
        for ($i = 0; $i < $n; $i++) {
            if ($a[$i] > $max) {
                $max = $a[$i];
            }
        }
        return $max;
    }
    
    function maxFloat($a) {
        $max = 0;
        foreach ($a as $value) {
            if ($value > $max) {
                $max = $value;
            }
        }
        return $max;
    }
        

    
    
   
    
    
    
    








?>