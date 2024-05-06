<?php

function sum(int ...$i){
    return array_sum($i);
}
$sum = sum(1,
    2,
    3,
);

var_dump($sum);