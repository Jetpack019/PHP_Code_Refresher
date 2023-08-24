<?php
function binaryToDecimal($binary){
    $decimal = 0;
    $length = strlen($binary);
    for($i = $length - 1;$i >= 0;$i--){
        if($binary[$i] == '1'){
            $decimal += 2 ** ($length - 1 - $i);
        }
    }
    return $decimal;
}


$binaryNumber = "10101";
$decimalEquivalent = binaryToDecimal($binaryNumber);
echo "Binary $binaryNumber is equivalent to decimal $decimalEquivalent.";


?>