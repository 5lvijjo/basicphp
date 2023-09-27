<?php

    echo "<br />";
    echo "Viết chương trình mã hóa và giải mã bằng logic hoán vị theo bước nhảy <br />";
    $n = -26;
    echo "Ví dụ: bước nhảy ". $n. " thì hệ mã a,b,c,...,x,y,z  thành  b,c,d....,y,z,a <br />";
    $a = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z" );

    echo "Số phần tử của bước nhảy: ". count($a). "<br />";
    echo "Mã sau hoán vị: <br />";
    $b = convertchars($a, $n);
    foreach ($b as $key => $value) {
        echo $key. "--". $value . "<br />";
    }

    function convertchars($a,$n) {
        #get key a - key <b>. hoán đổi value a sang b
        foreach($a as $key => $value) {
            if ($n < 0) {
                $n = count($a) - abs($n % count($a));
            }
            $newkey = ($key + $n) % count($a);
            $b[$newkey] = $value;
        }
        ksort($b);
        return $b;
    }














?>