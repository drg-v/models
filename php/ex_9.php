<?php
class Singleton{
    private static $instance;
    private function __construct(){}
    private function __clone() {}
    public static function getInstance(){
        if(!isset(self::$instance)){
            self::$instance = new Singleton;
        }
        return self::$instance;
    }
}

$v1 = Singleton::getInstance();
$v2 = Singleton::getInstance();
if($v1 === $v2){
    echo "It works\n";
} else {
    echo "Fail\n";
}