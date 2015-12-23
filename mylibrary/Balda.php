<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 14.12.15
 * Time: 18:10
 */

namespace Lib2015;


class Balda {
    public $name = 'balda';

    public function __construct($name = null) {
        $this->name = $name ?: $this->name;
    }

    public function getName(){
        return $this->name;
    }
}