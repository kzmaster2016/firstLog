<?php
namespace MyLogger;

class Logger {
    public static function log($message) {
        echo "[LOG]: " . $message . PHP_EOL;
    }
}