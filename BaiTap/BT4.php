<?php

    echo "<br />";
    echo "Tìm số nguyên tố đầu tiên trong mảng 1 chiều các số nguyên. Nếu mảng không có số nguyên tố thì trả về -1 <br />";

    # Cách tạo mảng 1 chiều các số nguyên

    $n = 20;
    $a = ramdomArray($n);
    foreach ($a as $value) {
        echo $value . "<br />";
    }
    echo "============<br>";

    $sNT = sNT($a);
    echo $sNT. "<br>";

    // echo "sadfa" . $sNT;
    #tạo mảng
    function ramdomArray($n) {
        for ($i = 0;$i < $n; $i++ ) {
            $a[] = mt_rand (1,100);
        }
        return $a;
    }
    function ramdomArray2 ($n) {
        $i = 0;
        while ($i < $n) {
            $a[] = mt_rand () ;
            $i++;
        }
        return $a;
    }

    #tìm số nguyên tố
    function sNT($a) {
        
        $sNT = null;
        foreach ($a as $value) {
            if ($value == 1) {
                continue;
            }
            #kiểm tra số nguyên tố   
            $laSoNguyenTo = true;            
            for ($i = 2; $i <= sqrt($value); $i++) {

                if ($value % $i == 0) {
                    $laSoNguyenTo = false;
                    break;
                }
            } 
            
            if ($laSoNguyenTo === True) {
                $sNT = $value;
            }

            //neu sNT khac null !== null
            #Cách dừng foreach khi thấy số nguyên tố đầu tiên ????
            if  ($sNT !== null) {
                break;
            }
        }

        if ($sNT === null ) {
            $sNT = -1;
        } 
        return $sNT;
        
    }


    ?>