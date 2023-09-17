<?php 
//filter people by gender
$people = [
    ['name'=>'A','gender'=>'M'],
    ['name'=>'B','gender'=>'M'],
    ['name'=>'C','gender'=>'F'],
    ['name'=>'D','gender'=>'F'],
    ['name'=>'E','gender'=>'M'],
];

function isMale($person){
    if($person['gender']=='M'){
        return true;
    }
    return false;
}

function isFemale($person){
    if($person['gender']=='F'){
        return true;
    }
    return false;
}

$males = array_filter($people, "isMale");
$females = array_filter($people, "isFemale");
print_r($females);