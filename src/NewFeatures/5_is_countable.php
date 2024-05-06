<?php

var_dump(
    is_countable(null), // NULL is not countable
    is_countable(1), // integers are not countable
    is_countable('abc'), // strings are not countable
    is_countable(new stdClass), // objects not implementing the Countable interface are not countable
    is_countable(new class implements Countable {

        public function count() : int
        {
            return 0;
        }
    }), // objects not implementing the Countable interface are not countable
    is_countable([1,2]) // arrays are countable
);