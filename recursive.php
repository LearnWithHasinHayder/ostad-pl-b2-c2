<?php 
//what is recursion ?

// function countdown($n){
//     for( $i = $n; $i > 0; $i--){
//         echo "$i \n";
//     }
// }

function recursiveCountdown($n){
    if($n == 0){
        return;
    }
    echo $n."\n";
    recursiveCountdown($n - 1);
}

recursiveCountdown(5);