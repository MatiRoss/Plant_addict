<?php

function vatApply(float $is_price, float $is_vat): float
{
    $result = (($is_price * $is_vat) / 100) + $is_price;
    return number_format($result, 2);
}