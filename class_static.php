<?php
/**
 * Created by PhpStorm.
 * User: alain
 * Date: 5/10/18
 * Time: 9:08 PM
 */

class Car {

    static $engine = 1;
    var $doors = 4;

    function MoveWheels(){
        Car::$engine = 10;
    }

}

$bmw = new Car();

Car::MoveWheels();

echo Car::$engine;

