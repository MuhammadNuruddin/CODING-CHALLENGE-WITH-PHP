<?php 

function trapping_water($heights) {
    $left = 0;
    $right = count($heights) - 1;
    $left_max = $heights[$left];
    $right_max = $heights[$right];
    $result = 0;
    if(!$heights) return 0;
    while($left < $right) {
        if($left_max < $right_max) {
            $left++;
            $left_max = max($left_max,$heights[$left]);
            $result+= $left_max - $heights[$left];
        }else {
            $right--;
            $right_max = max($right_max,$heights[$right]);
            $result+= $right_max - $heights[$right];
        }
    }
    return $result;
}
$height = [0,1,0,2,1,0,1,3,2,1,2,1];
echo trapping_water($height);