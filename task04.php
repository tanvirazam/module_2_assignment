<?php 

function isFibonacci($n){
    $very=0;
    $old=1;
    $new=1;
    for($i=0;$i<$n;$i++){
        echo $very." ";
        $old=$new;
        $new=$old+$very;
        $very=$old;
    }
}

isFibonacci(15);