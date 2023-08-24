<?php
function linearSearch($arr,$target){
    $n = count($arr);

    for($i=0;$i<$n;$i++){
        if ($arr[$i] == $target) {
            return $i;
        }
    }
    return -1;
}
$array = [64, 34, 25, 12, 22, 11, 90];
$target = 25;
$result = linearSearch($array, $target);
echo "Element found at index: " . $result;
?>