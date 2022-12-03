<?php

function two_sum($target, $array) {
    $res = [];
    foreach($array as $key => $value) {
        $diff = $target - $array[$key];
        if(array_search($diff, $array)) {
            $key_diff = array_search($diff, $array);
            if($key !== $key_diff) {
                array_push($res, $key, $key_diff);
                break;
            }
        }
    }
    return $res;
}

$nums = [2,7,11,15];
var_dump(two_sum(9,$nums));