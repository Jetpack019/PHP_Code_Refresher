<?php
function fibonacci($n){
    if($n <= 1){
        return $n;
    }
    return fibonacci($n - 1) + fibonacci($n - 2);
}

$terms = 10;
for($i=0;$i<$terms;$i++){
    echo fibonacci($i)." ";
}

?>