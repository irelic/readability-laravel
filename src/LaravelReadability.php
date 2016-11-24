<?php

namespace Sukohi\LaravelReadability;

use Readability;

require_once 'lib/Readability.inc.php';

class LaravelReadability
{
    public function make($html, $html_input_charset = 'utf-8')
    {
        return new Readability($html, $html_input_charset);
    }
}