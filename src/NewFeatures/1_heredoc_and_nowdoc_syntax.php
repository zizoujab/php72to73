<?php
//1. To enable for the closing marker to be indented, and
//function getAllUsers()
//{
//    $sql = <<<SQL
//    SELECT
//        *
//    FROM
//        users
//    SQL;
//    var_dump($sql);
//}
//getAllUsers();

//2. To remove the new line requirement after the closing marker
$values = [<<<END
        a
        b
        c
    END,'d e f'];

var_dump($values);
