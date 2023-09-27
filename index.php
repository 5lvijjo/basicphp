<?php
    echo "Hello";
    echo "<br />";
    $a = 5;
    $b = 8;
    echo "Tổng của 2 số ". $a ."+". $b . " là: <br />";
    echo tinhTonghaiso($a,$b);

    function tinhTongHaiSo($soHang1, $soHang2){
        $a = 6;
        $tong = $soHang1 + $soHang2;
        return $tong;
    }
    echo "<br />". $a;
    echo "<br />========================================<br />";
    echo "test <br />";
include_once("XuLyNghiepVu/BT1.php");
include_once("XuLyNghiepVu/BT2.php");
include_once("XuLyNghiepVu/Bt3.php");
include_once("XuLyNghiepVu/BT4.php");
include_once("XuLyNghiepVu/BT5.php");
include_once("XuLyNghiepVu/BT6.php");

?>