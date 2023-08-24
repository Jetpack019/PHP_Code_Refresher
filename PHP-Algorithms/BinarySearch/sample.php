<?php
function binarySearch($arr,$target){
    $left = 0;
    $right = count($arr) - 1;

    while($left <= $right){
        $mid = $left + ($right - $left) / 2;

        if($arr[$mid] == $target){
            return $mid;
        }

        if($arr[$mid] < $target){
            $left = $mid + 1;
        } else{
            $right = $mid - 1;
        }

    }
    return -1;
}

$sortedArray = [11,12,22,25,34,64,90];
$target  = 25;
$result = binarySearch($sortedArray,$target);
echo "Element found at index: " . $result;

?>