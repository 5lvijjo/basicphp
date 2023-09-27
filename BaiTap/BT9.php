<?php

    echo "<br />";
    echo "Xuất giá trị Key trong mảng A: A,B,C,...,Z của đoạn string <br />";

    $sample = array ("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M","N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");
    $string = 'OnePiece';
    echo $string. "<br />";
    $a = conVertSymbolToInt($sample,$string);
    echo "Giá trị Key trong mảng A là: <br />";
    foreach($a as $value) {
        echo $value. "<br />";
    }

    function conVertSymbolToInt($sample,$string) {
        for($i = 0; $i < strlen($string); $i++) {
            $b = strtoupper($string [$i]);
            $a [] = array_search($b, $sample);
        }
        return $a;
    }












?>