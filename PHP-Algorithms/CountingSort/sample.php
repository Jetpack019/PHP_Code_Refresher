<?php
function countingSort($arr){
    $maxValue = max($arr);
    $countArray = array_fill(0,$maxValue + 1,0);

    foreach($arr as $num){
        $countArray[$num]++;
    }

    $sortedArray = array();
    for($i=0;$i<=$maxValue;$i++){
        while($countArray[$i] > 0 ){
            $sortedArray[] = $i;
            $countArray[$i]--;
        }
    }

    return $sortedArray;
}

$array = [4, 2, 2, 8, 3, 3, 1];
$sortedArray = countingSort($array);
print_r($sortedArray);

?>