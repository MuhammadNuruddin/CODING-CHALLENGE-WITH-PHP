<?php

function linear_seach($target, $array) {
    foreach( $array as $key => $value) {
        if($value == $target) return $key;
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
$number = linear_seach(4, $numbers);
$verify_number = exists($number);