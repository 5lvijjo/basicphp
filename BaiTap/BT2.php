<?php
    echo "<Br />";
    echo "Viết chương trình in ra hình chữ nhật có kích thước m x n <br />";
    $m = 8;
    $n = 4;
    
    $u = veHinh2 ( $m, $n);

    // function veHinh ( $m, $n) {
    //     for ($i = 1; $i <= $n; $i++ ){
    //         for ($j = 1; $j <= $m;$j++) {
    //         if ($j < $m) {
    //             echo "*";
    //         } else {
    //             echo "* <br />";
    //         }
            
    //         }
    //     }
    // }



    function veHinh2 ( $m, $n) {
        for ($i = 1; $i <= $n; $i++ ){
            if ($i == 1 or $i == $n) {
                for ($j = 1; $j <= $m;$j++) {
                    if ($j < $m) {
                    echo "*";
                    } else {
                    echo "* <br />";
                    }
                    
                }
            } else {
                for ($j = 1; $j <= $m; $j++) {
                    if ($j == 1) {
                        echo "*";
                    } elseif ($j == $m) {
                        echo "* <br />";
                    } else {
                         echo "a";
                    }
                    
                }
            }
            
        }
    }
    
    // function veHinh3 ( $m, $n) {
    //     for ($i = 1; $i <= $n; $i++ ){
    //         if ($i > 1 and $i < $n) {
    //             for ($j = 1; $j <= $m; $j++) {
    //                 if ($j = 1) {
    //                     echo "*";
    //                 } elseif ($j = $m) {
    //                     echo "* <br />";
    //                 }
    //             }
    //         } else {
    //             for ($j = 1; $j <= $m;$j++) {
    //                 if ($j < $m) {
    //                 echo "*";
    //                 } else {
    //                 echo "* <br />";
    //                 }
                    
                    
    //             }
    //         }
            
    //     }
    // }

?>  