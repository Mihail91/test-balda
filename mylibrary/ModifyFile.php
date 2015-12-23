<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 15.12.15
 * Time: 13:05
 */

namespace Lib2015;


class ModifyFile {

    const NAME_FILE = 'dictionary.txt';

    private $path;
    private $newPath;

    public function __construct($path = null) {
        $this->path = $path ?: dirname(__DIR__).'/userfiles/OZHEGOV.TXT';
        $this->newPath =  dirname(__DIR__) . '/userfiles/' . self::NAME_FILE;
    }

    public function start(Mode $mode){
       return call_user_func([$this, (string)$mode]);
    }

    private function prepare(){
        $f = fopen($this->path, 'r');
        if ($f){
            $last = '';
            while (($buffer = fgets($f)) !== false){
//                if (strlen($buffer) === 2) var_dump($buffer);
                if ($buffer !== $last &&  strlen($buffer) !== 2 && !preg_match('/.*?[ ,\[\]I-]+.*/',$buffer)){
                    $last = $buffer;
                    file_put_contents($this->newPath, $buffer, FILE_APPEND);
                }
            }
            fclose($f);
            return true;
        }
        return false;
    }

}