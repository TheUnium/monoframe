<?php namespace MonoLib\Lib\Locale;

use MonoLib\Lib\Config;

class Lang
{
    private static $language;
    private static $strings;

    public static function setLanguage($language) {
        self::$language = $language;
        self::$strings = array();

        $path = self::getLanguagePath($language);
        if(!file_exists(self::getLanguagePath($language))) { $path = self::getLanguagePath(Config::get("DEFAULT_LANGUAGE")); }
        if (file_exists($path)) {
            self::$strings = include $path;
        }
    }

    public static function gs($key) {
        return isset(self::$strings[$key]) ? self::$strings[$key] : '';
    }

    public static function getLanguagePath($language) {
        return Config::get('LANGUAGE_PATH') . '/' . $language . '.php';
    }
}