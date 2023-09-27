<?php

    echo "<br />";
    echo "6. Phương trình trùng phương <br />";
   
    $a = 2;
    $b = -4;
    $c = 1;
    $delta = tinhDelta( $a, $b, $c);
    $x0 = -$b/(2*$a);
    $x1 = (-$b + sqrt($delta))/(2*$a);
    $x2 = (-$b - sqrt($delta))/(2*$a);
   
    if ($delta < 0 ) {
        echo "Phương trình vô nghiệm <br />";
    } elseif ($delta == 0 ) {
        if ($x0 < 0) {
            echo "Phương trình vô nghiệm <br />";
        } else  {
            echo " Phương trình có 2 nghiệm là <br /> x1 = " . sqrt($x0) . "<br /> x2 = " . -sqrt($x0) . " <br / >";
        }
    } else {
        if ($x1 < 0) {
            echo "Phương trình không có nghiệm x1 và x2 <br />";
        } else {
            echo " Phương trình có nghiệm là <br /> x1 = " . sqrt($x1) . "<br /> x2 = " . -sqrt($x1) . " <br / >";
        }
        if ($x2 < 0) {
            echo "Phương trình không có nghiệm x3 và x4 <br />";
        } else {
            echo " Phương trình có nghiệm là <br /> x3 = " . sqrt($x2) . "<br /> x4 = " . -sqrt($x2) . " <br / >";
        }
    }





?>