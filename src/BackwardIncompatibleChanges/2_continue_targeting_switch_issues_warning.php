<?php

$array = ['unwanted_value', 'a', 'b', 'c'];

foreach ($array as $item){
    switch ($item){
        case 'unwanted_value':
            continue;

    }
    echo "We have the following value : $item" . PHP_EOL;
}