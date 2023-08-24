<?php
function selectionSort($arr){
    $n = count($arr);

    for($i=0;$i<$n-1;$i++){
        $minIndex = $i;
        for($j=$i+1;$j<$n;$j++){
            if($arr[$j]<$arr[$minIndex]){
                $minIndex = $j;
            }
        }
        $temp = $arr[$i];
        $arr[$i] = $arr[$minIndex];
        $arr[$minIndex] = $temp;
    }
    return $arr;
}

$array = [64,34,25,12,22,11,90];
$sortedArray = selectionSort($array);
print_r($sortedArray);
?>