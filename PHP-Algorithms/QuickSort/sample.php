<?php
function quickSort($arr) {
    if (count($arr) <= 1) {
        return $arr;
    }

    $pivot = $arr[0];
    $left = $right = array();

    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] < $pivot) {
            $left[] = $arr[$i];
        } else {
            $right[] = $arr[$i];
        }
    }

    return array_merge(quickSort($left), array($pivot), quickSort($right));
}

$array = [64, 34, 25, 12, 22, 11, 90];
$sortedArray = quickSort($array);
print_r($sortedArray);

?>