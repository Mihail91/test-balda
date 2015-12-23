<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 15.12.15
 * Time: 18:52
 */

namespace Lib2015;


class Dictonary {

    protected static $_instance;

    private function __construct() {

    }

    public static function getInstance() {
        if (self::$_instance === null) {
            self::$_instance = new self;
        }

        return self::$_instance;
    }

    private function __clone() {
    }

    private function __wakeup() {
    }
}