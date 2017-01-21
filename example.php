<?php

$num = 1;


$ret = isNum($num);
echo $ret;

function isNum($num) {
    if (is_numeric($num)) {
        return true;
    } else {
        return false;
    }
}
