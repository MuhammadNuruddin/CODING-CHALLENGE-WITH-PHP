<?php

function binary_search($target, $array) {
    $start = 0;
    $end = count($array) - 1;

    while($start <= $end) {
        $midpoint = floor(($start + $end)/2);

        if($array[$midpoint] == $target) {
            return $midpoint;
        }else if($array[$midpoint] > $target) {
            $end = $midpoint - 1;
        }else {
            $start = $midpoint + 1;
        }
    }

    return -1;
}

function exists($index) {
    if($index != -1) {
        echo "Target found at $index";
    }else {
        echo 'Target not found';
    }
}

$numbers = [1,2,3,4,5,6,7,8,9,10];
$number = binary_search(10, $numbers);
$verify_number = exists($number);