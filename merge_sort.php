<?php
// ini_set('memory_limit','50M');
// ini_set('display_errors',1);
// error_reporting(E_ALL);
function merge_sort($array) {
    if (count($array) <= 0) return $array;

    $midpoint = floor(count($array)/2);
    $left_half = array_slice($array,0,$midpoint);
    $right_half = array_slice($array,$midpoint);

    $left = merge_sort($left_half);
    $right = merge_sort($right_half);

    return merge($left, $right);

}

function merge($left, $right) {
    $list = [];
    $i = 0;
    $j = 0;
    while($i < count($left) && $j < count($right)) {
        if($left[$i] < $right[$j]) {
            array_push($list, $left[$i]);
            $i+=1;
        }else {
            array_push($list, $right[$j]);
            $j+=1;
        }
    }
    while($i < count($left)) {
        array_push($list, $left[$i]);
            $i+=1;
    }
    while($j < count($right)) {
        array_push($list, $right[$j]);
            $j+=1;
    }

    return $list;
}

function verify_sorted($array) {
    $n = count($array); 
    if ($n <= 1) return 'Array Sorted';

    return ($array[0] < $array[1] && verify_sorted(array_slice($array,2))) ? 'Array Sorted' : 'Array Not Sorted';
}

$numbers = [96,54,23,57,98,2,12,10,5];
$sorted_array = merge_sort($numbers);
var_dump($sorted_array);