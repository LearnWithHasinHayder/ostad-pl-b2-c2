<?php 
//recursion 
//recursive function 
function factorial($n){
    if($n == 0){
        return 1;
    }
    return $n * factorial($n - 1);
}

//fibonacci 
// 0 1 1 2 3 5 8 13 21 34 55 89 144

function nonRecursiveFactorial($n){
    $result = 1;
    for($i = $n; $i > 0; $i--){
        $result *= $i;
    }
    return $result;
}

$result = factorial(4);
echo $result;

