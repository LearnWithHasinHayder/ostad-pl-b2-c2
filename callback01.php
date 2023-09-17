<?php 
$numbers = [1,2,3,4,5,6,7,8,9,10,12];
isEven(1);
function isEven($n){
    if($n % 2 == 0){
        return true;
    }
    return false;
}

$evenNumbers = array_filter($numbers, "isEven");
print_r($evenNumbers);