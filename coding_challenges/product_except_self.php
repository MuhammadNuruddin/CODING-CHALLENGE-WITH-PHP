<?php

function product_except_self($array) {
    $n = count($array);
    $output = [];

    if($n < 1) return $output;

    $product = 1; #start for cummulative product of left
    for ($i=0; $i < $n; $i++) { 
        $product *= $array[$i];
        array_push($output, $product); # product of left side
    }

    #traverse right side and update
    $product = 1;
    for ($i= $n - 1; $i > 0; $i--) { #loop backwards to get right
        $output[$i] = $output[$i - 1] * $product;
        $product *= $array[$i];
    }
    $output[0] = $product; # base case - because first element will be sum of all the right elements

    return $output;
}