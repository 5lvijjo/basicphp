<?php

    echo "<br />";
    echo "Cho một chuỗi string mã hóa từ mảng A(A-Z) sang mảng B với bước nhảy n <br />";

    echo "test first --AdbaC <br />";
    $string = 'CfDcE' ;
    echo $string. "<br />";
    $n = -2;
    echo $n. " <br />";
    $symbol = decrypt($string, $n);
    echo "Chuỗi sau mã hóa là: ". $symbol. "<br />";

    #idea lấy key trong A / chuyển A sang B với bước nhảy n, từ key a xuất ra string B

    function convertSymbolToInt9($string, $sample) {
        for($i = 0; $i < strlen($string); $i++) {
            $temp = strtoupper((string) $string[$i]);
            $key [] = array_search($temp,$sample);
        }
        return $key;
    }

    function convertSchema($sample, $n) {
        foreach($sample as $key => $value) {
            if($n < 0) {
                $n = count($sample) - abs($n % count($sample));
            }
        $newkey = ($n + $key) % count($sample);
        $b [$newkey] = $value;
        ksort ($b);
        }
        return $b;
    }

    function convertInttoSymbol($key, $b) {
        $symbol = '';
        foreach($key as $value) {
            $symbol .= $b[$value];
        }
        return $symbol;
    }

    function encrypt($string,$n) {
        $sample = array ("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M","N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");
        $key = convertSymbolToInt9($string, $sample);
        $b = convertSchema($sample, $n);
        $symbol = convertInttoSymbol($key, $b);
        return $symbol;
    }

    function decrypt($string, $n) {
        $n = -$n;
        $symbol = encrypt($string, $n);
        return $symbol;
    }









?>