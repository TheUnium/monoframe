<?php namespace MonoLib\Lib;

class Text
{
    public static function say($text)
    {
        return htmlspecialchars($text);
    }
}