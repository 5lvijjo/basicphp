<?php

    echo "<br />";
    echo "Cho một chuỗi in từng ký tự chuỗi <br />";
    echo "Cho một mảng, Nhập một giá trị, in KeyIndex của giá trị đó <br />";

    #Cho một chuỗi in từng ký tự chuỗi
    $a = "goodmorning"; 
    echo $a . "<br />";
    echo "-------<br />";   

    for ($i = 0; $i < strlen($a); $i++) {
        echo $a[$i] . "<br />";
    }

    #Cho một mảng, Nhập một giá trị, in KeyIndex của giá trị đó
    $b = array("E", 1, "A", "E", "T", 2, "HE"  );
    $find = "E";
    // $keyIndex = keyIndex($b,$find);
    $keyIndex = array_search($find,$b);
    // print_r($keyIndex);
    echo "<br />";
    echo $keyIndex. "<br/ >";
    // foreach($keyIndex as $value) {
    //     echo "Giá trị KeyIndex của ". $find. "  trong mảng là: ". $value. "<br />";
    // }
    
    
    // function keyIndex($b,$find) {
    //     $c = null;
    //     foreach ($b as $keyIndex => $value) {
    //         if ($value === $find) {
    //             $c = $keyIndex;
    //             break;
    //         }
    //     }
    //     return $c;
    // }
    











?>