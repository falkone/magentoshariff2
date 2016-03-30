<?php

namespace Falkone\MagentoShariff\Block\Common;

abstract class Request
{
    public static function makeSimpleRequest($url)
    {
        $_buffer = implode('', file($url));
        return $_buffer;
    }
}