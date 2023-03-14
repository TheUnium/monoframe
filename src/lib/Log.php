<?php namespace MonoLib\Lib;

class Log {
    private static $logFilePath;

    public static function log($level, $message, $context = []) {
        $logMessage = date('Y-m-d H:i:s') . " [$level]: $message";
        if (!empty($context)) {
            $logMessage .= ' ' . json_encode($context);
        }
        $logMessage .= "\n";
        file_put_contents(self::$logFilePath, $logMessage, FILE_APPEND);
    }

    public static function emergency($message, $context = []) {
        self::$logFilePath = Config::get('LOG_PATH') . '/errors.log';
        self::log('EMERGENCY', $message, $context);
    }

    public static function critical($message, $context = []) {
        self::$logFilePath = Config::get('LOG_PATH') . '/errors.log';
        self::log('CRITICAL', $message, $context);
    }

    public static function error($message, $context = []) {
        self::$logFilePath = Config::get('LOG_PATH') . '/errors.log';
        self::log('ERROR', $message, $context);
    }

    public static function warning($message, $context = []) {
        self::$logFilePath = Config::get('LOG_PATH') . '/extra.log';
        self::log('WARNING', $message, $context);
    }

    public static function alert($message, $context = []) {
        self::$logFilePath = Config::get('LOG_PATH') . '/extra.log';
        self::log('ALERT', $message, $context);
    }

    public static function notice($message, $context = []) {
        self::$logFilePath = Config::get('LOG_PATH') . '/extra.log';
        self::log('NOTICE', $message, $context);
    }

    public static function info($message, $context = []) {
        self::$logFilePath = Config::get('LOG_PATH') . '/app.log';
        self::log('INFO', $message, $context);
    }

    public static function debug($message, $context = []) {
        self::$logFilePath = Config::get('LOG_PATH') . '/app.log';
        self::log('DEBUG', $message, $context);
    }
}
