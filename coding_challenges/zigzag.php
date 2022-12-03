<?php
function findZigZagSequence($arr){
    if(count($arr) == 1) return [$arr];
    $n = count($arr);
    $k = ($n + 1)/2;
    $last = count($arr) - 1;
    sort($arr);
    [$arr[$k],$arr[$last]] = [$arr[$last],$arr[$k]];
    $left = $k + 1;
    $right = $last - 1;
    while($left < $right) {
      [$arr[$left],$arr[$right]] = [$arr[$right],$arr[$left]];
      $left++;
      $right--;  
    }   
    return $arr;
}
$list = [7, 2, 5, 4, 3, 6, 1];
print_r(findZigZagSequence($list));
