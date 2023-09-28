<?php

class Encryption {



    #idea lấy key trong A / chuyển A sang B với bước nhảy n, từ key a xuất ra string B

    private static function convertSymbolToInt($string, $sample) {
        for($i = 0; $i < strlen($string); $i++) {
            $temp = strtoupper((string) $string[$i]);
            $key[] = array_search($temp,$sample);
        }
        return $key;
    }

    private static function convertSchema($sample, $n) {
        foreach($sample as $key => $value) {
            if($n < 0) {
                $n = count($sample) - abs($n % count($sample));
            }
        $newkey = ($n + $key) % count($sample);
        $b[$newkey] = $value;
        ksort ($b);
        }
        return $b;
    }

    private static function convertIntToSymbol($key, $b) {
        $symbol = '';
        foreach($key as $value) {
            $symbol .= $b[$value];
        }
        return $symbol;
    }

    private static function encrypt($string,$n) {
        $sample = array ("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M","N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");
        $key = self::convertSymbolToInt($string, $sample);
        $b = self::convertSchema($sample, $n);
        return self::convertIntToSymbol($key, $b);
        
    }

    private static function decrypt($string, $n) {
        $n = -$n;
        return self::encrypt($string, $n);
    }
    public function getDecrypt($string, $n) {
        return self::decrypt($string, $n);
    }
    public function getEncrypt($string, $n) {
        return self::encrypt($string, $n);
    }

}

echo "<br />";
echo "Cho một chuỗi string mã hóa từ mảng A(A-Z) sang mảng B với bước nhảy n <br />";

echo "test first --AdbaC <br />";
$string = 'helloworld' ;
echo $string. "<br />";
$n = -2;
echo $n. " <br />";
// $symbol = getDecrypt($string, $n);
$symbol2 = Encryption::getEncrypt($string,$n);
$symbol = Encryption::getDecrypt($symbol2,$n);
// $symbol = Encryption::decrypt('CfDcE', -2);
print_r($symbol2);
echo "<br />";
print_r($symbol);
// echo "Chuỗi sau mã hóa là: ". $symbol. "<br />";
echo "<br />--------------------------------<br />";




?>