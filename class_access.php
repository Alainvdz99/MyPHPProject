<?php
/**
 * Created by PhpStorm.
 * User: alain
 * Date: 5/10/18
 * Time: 9:08 PM
 */

class Car {

    public $wheels = 4;
    protected $hood = 1;
    private $breaks = 1;
    var $doors = 4;

    function showPropety(){
        echo $this->hood;
    }

}

$bmw = new Car();
echo $bmw->wheels;

$semi = new Semi();
class Semi extends Car {



}

echo $semi->showPropety();