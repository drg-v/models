<?php
class Rectangle{
    public $height, $width;
    private static $count = 0;
    function __construct($height = 0, $width = 0){
        $this->height = $height;
        $this->width = $width;
        self::$count++;
    }
    function set($height, $width){
        $this->height = $height;
        $this->width = $width;
    }
    public static function GetCount() {
        return self::$count;
    }
    function __toString(){
        return "{$this->height}, {$this->width}";
    }
    function __destruct(){
        self::$count--;
    }
}
$obj = new Rectangle(10,20);
echo $obj->width."\n";
$obj->name = "Rectange1";
$obj->set(100, 100);
echo $obj->width."\n";
echo $obj->GetCount()."\n";
$clone = clone $obj;
echo $clone."\n";

final class Square extends Rectangle{
    public function __construct($height){
        parent::__construct($height, $height);
    }
}

$extended = new Square(100);
echo $extended."\n";