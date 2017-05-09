<?php
/**
 * Created by PhpStorm.
 * User: yollka
 * Date: 5/9/17
 * Time: 12:29 PM
 */


/**
 * @param $arrayFirst
 * @param $arraySecond
 *
 * @return array
 */
function arrayCombine($arrayFirst, $arraySecond)
{
    $result = [];
    for ($i = 0, $j = 0, $cnt = count($arrayFirst); $i < $cnt; $i++) {
        $result[++$j] = array_shift($arrayFirst);
        $result[++$j] = array_shift($arraySecond);
    }

    return $result;
}

$arrayFirst = ['a', 'b', 'c'];
$arraySecond = [1, 2, 3];

$resultArray = ['a', 1, 'b', 2, 'c', 3];

var_dump(assert($resultArray === arrayCombine($arrayFirst, $arraySecond)));
