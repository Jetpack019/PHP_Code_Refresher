<?php
function gcd($a,$b){
    if($b == 0){
        return $a;
    }
    return gcd($b,$a % $b);
}

$a = 48;
$b = 18;
$result = gcd($a,$b);

?>