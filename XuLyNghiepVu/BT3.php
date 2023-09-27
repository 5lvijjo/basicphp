<?php
    echo "<br / >";
    echo "4.Tính diện tích hình chữ nhật <br />";
    $a = 2;
    $b = 4;
    $dt = dienTich($a, $b);
    echo "Diện tích hình chữ nhật là " . $dt . "<br />";
    


    function dienTich($a, $b){
        $dt = $a * $b;
        return $dt;
    }


?>