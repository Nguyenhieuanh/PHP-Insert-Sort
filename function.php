<?php
function insertSort($arr)
{
    for ($i = 0; $i < count($arr); $i++) {
        $value = $arr[$i];
        $j = $i - 1;
        while ($j >= 0 && $arr[$j] > $value) {
            $arr[$j + 1] = $arr[$j];
            $j--;
        }
        $arr[$j + 1] = $value;
    }
    return $arr;
}

function show($arr)
{
    foreach ($arr as $item) {
        echo "$item, ";
    }
}