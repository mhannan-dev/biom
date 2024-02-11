<?php

if (!function_exists('lowercase')) {
    function lowercase($text)
    {
        return mb_strtolower($text, 'UTF-8');
    }
}
