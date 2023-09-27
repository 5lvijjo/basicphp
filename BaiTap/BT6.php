<?php

    echo "<br />";
    echo "Sắp xếp mảng tăng dần <br />";

    $n = 5;
    $a = ramdomArray6($n);
    foreach($a as $value) {
        echo $value . "<br />";
    }
    echo "------ <br />";
    $b = arrange($a,$n);
    foreach($b as $tt) {
        echo $tt . "<br />";
    }




 #Tạo mảng
    function ramdomArray6($n) {
        for ($i = 0;$i < $n; $i++ ) {
            $a[] = mt_rand (-50,50);
        }
        return $a;
    }
//  # Sắp xếp tăng dần
    function arrange($a,$n) {
        for ($i = 0; $i <$n; $i++) {
            for ($j = $i +1; $j < $n; $j++) {
                if ($a[$i] > $a[$j]) {
                    $temp = $a[$i];
                    $a[$i] = $a[$j];
                    $a[$j] = $temp;
                } 
            }
            
        }
        return $a;    
    }    
   

// ?>