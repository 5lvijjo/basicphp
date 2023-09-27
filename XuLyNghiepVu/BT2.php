<?php

    echo "<br />";
    echo "3.Giải phương trình bậc 2 <br />";
    $a = 1;
    $b = 2;
    $c = 1;
    $delta = tinhDelta( $a, $b, $c);
    $x1 = (-$b + sqrt($delta))/(2*$a);
    $x2 = (-$b - sqrt($delta))/(2*$a);

    if ($delta < 0) {
        echo "Phương trình vô nghiệm <br />";
    } elseif ($delta == 0 ) {
        echo "Phương trình có nghiệm kép x1 = x2 = " . -$b/(2*$a). "<br />";
    } else {
        echo "Phương trình có hai nghiệm phân biệt x1 = " . $x1 . ",   x2 = " . $x2 . "<br />";
    }

    function tinhDelta($a, $b, $c){
        $delta = pow($b,2) - 4*$a*$c;
        return $delta;
    }




?>