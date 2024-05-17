<?php

require_once './src/Entities/Product.php';

class Services
{
    public static function getCurrency($price, $locale, $currency)
    {
        $fmt = numfmt_create( $locale, NumberFormatter::CURRENCY);
        return numfmt_format_currency($fmt, $price, $currency);
    }
}