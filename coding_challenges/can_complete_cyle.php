<?php
function can_complete_cycle($gas, $cost) {
    if(array_sum($gas) < array_sum($cost)) return -1;

    $total = 0;
    $res = 0;
    for($i = 0; $i < count($gas); $i++) {
        $total+= ($gas[$i] - $cost[$i]);

        if($total < 0) {
            $total = 0;
            $res = $i + 1;
        }
    }

    return $res;
}