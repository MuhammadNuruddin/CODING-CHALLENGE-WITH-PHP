<?php
function recursive_binary_search($target, $array) {
    if(count($array) == 0){
        return false;
    } else {
        $midpoint = floor(count($array)/2);
        if($array[$midpoint] == $target) {
            return true;
        }else {
            if($array[$midpoint] < $target) {
                return recursive_binary_search($target, array_slice($array,$midpoint));   
            }else {
                return recursive_binary_search($target, array_slice($array,0,$midpoint-1));
            }
        }
        
    }
}

function exists($result) {
    if($result) {
        echo 'Target Found';
    }else {
        echo 'Target not found...';
    }
}

$numbers = [1,2,3,4,5,6,7,8,9,10];
$number = recursive_binary_search(10, $numbers);
$verify_number = exists($number);