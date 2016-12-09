<?php

namespace Sukohi\LaravelReadability;

use Sukohi\LaravelReadability\Lib\Readability;

class LaravelReadability
{
    public function make($html, $html_input_charset = 'utf-8')
    {
        return new Readability($html, $html_input_charset);
    }
}