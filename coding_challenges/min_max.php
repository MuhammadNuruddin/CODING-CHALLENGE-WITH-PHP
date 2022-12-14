<?php

function min_max($array) {
    $sum = array_sum($array);
    $min = $sum;
    $max = 0;

    foreach($array as $key => $value) {
        $excluded_sum = $sum - $value;
        if($max < $excluded_sum) $max = $excluded_sum;
        if($min > $excluded_sum) $min = $excluded_sum;
    }
    echo $min.' '.$max;
}

$array = [1,3,5,7,9];
min_max($array);