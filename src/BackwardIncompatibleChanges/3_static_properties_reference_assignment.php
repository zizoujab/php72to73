<?php

class Test
{
    public static $x = 0;
}

class Test2 extends Test
{
}


Test2::$x = &$y;
$y = 1;

var_dump(Test::$x, Test2::$x);
// PHP 7.2 int(0), int(1)
// PHP 7.3     int(1), int(1)
