<?php 
$numbers = [1,2,3,4,5];

function square($n){
    return $n * $n;
}

function cube($n){
    return $n * $n * $n;
}

$cubes = array_map("cube", $numbers);
$squares = array_map("square", $numbers);
print_r($squares);