<?php 
$name = "John Doe"; //global variable

function greet(){
    $greetings = "Hi"; //local variable
    global $name; //this is how you use it
    echo "Hello $name"; 
}

function increament(){
    static $count = 0; //static variable
    $count++;
    echo $count;
}