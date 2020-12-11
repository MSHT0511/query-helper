<?php

//namespace App\Util;

trait QueryHelper
{
    public static function splitKeywords($keywords)
    {
        return explode(' ', preg_replace(['/[ |　|\t|\n|\r|\0|\x0B]+/u', '/^ | $/u'], [' ', ''], $keywords));
    }
}
