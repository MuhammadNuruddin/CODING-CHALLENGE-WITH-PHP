<?php
function find_num($nums) {
    $num = array_count_values($nums);
    $missing_number = count($nums);
    $repeated_num = array_search(2,$num);
    return [$repeated_num, $missing_number];
}

$nums = [1,2,3,4,3];
print_r(find_num($nums));