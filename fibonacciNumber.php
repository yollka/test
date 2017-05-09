<?php
/**
 * Created by PhpStorm.
 * User: yollka
 * Date: 5/9/17
 * Time: 12:29 PM
 */

/**
 * @param $num
 * @return int
 */
function fibonacci($num)
{
    if ($num < 3) {
        return 1;
    }
    return fibonacci($num - 1) + fibonacci($num - 2);
}

$number = 6;
$expectNumber = 8;

var_dump(assert($expectNumber === fibonacci($number)));
