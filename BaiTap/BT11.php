<?php
    
    echo "<br />";
    echo "1. Tính gấp đôi số a bằng tham biến & (khác tham trị %a) <br />";
    echo "2. Xử lý mảng bằng tham biến & <br />";


    $a = 5;
    nhanHai($a);
    echo "1. kêt quả: <br />";
    echo $a . "<br />";

    function nhanHai(&$a) {
        $a = $a * 2;
    }

    
    $n = 5;
    $b = ramdomArray($n);
    print_r($b);
    echo "<br />";
    conghaimang($b);
    print_r($b);
    echo "<br />";
    
    echo "Sắp xếp mảng : <br />";
    sapXepTangDan($b);
    print_r ($b);
    echo "<br />";

    function conghaimang(&$b) {
        // foreach($b as $key => $value) {
        //     $value += 2;
        //     $b[$key] = $value;
        // }
        foreach($b as &$value) {
            $value += 2;
        }
    }

    function sapXepTangDan(&$b) {
        for ($i = 0; $i < count($b); $i++) {
            for ($j = $i +1; $j < count($b); $j++) {
                if ($b[$i] > $b[$j]) {
                    $temp = $b[$i];
                    $b[$i] = $b[$j];
                    $b[$j] = $temp;
                } 
            }
            
        }
    }








?>