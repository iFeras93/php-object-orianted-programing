<?php

/*
 * Initialize class
 */
class Person{
    public $name="Naya";
    private $age=18;
    private $id="123123";
}

// Initialize object
//$person_1= new Person();
//$person_1->name="Naya Feras";
//var_dump($person_1);


//////////////////////////////////////////////////////////////////////////////

// Practice PHP OOP (level 1)
// https://dev.to/ericchapman/learn-by-doing-practice-php-oop-2li3
// create a class name Product and create a instance of that class name product1

class Product{

    /*
     * Properties (Member Variables)
     */
    public $name;
    public $description;
    public $price;
}

// init objects
$product1= new Product();
$product2= new Product();

// Set instance property name
$product1->name= "iPhone 14";
$product2->name= "iPhone 14 Pro";

//print_r([
//    $product1->name,
//    $product2->name,
//]);
//


///////////////////////////////// Constrcutor  & Inheritance /////////////////////////////////////////////

class Car{
    public $color;
    public $size;


    public function __construct()
    {
        echo 'Parent Constructor'.PHP_EOL;
    }

    public function getCarColor()
    {
        return $this->color.PHP_EOL;
    }

    public function setCarColor($color)
    {
        $this->color= $color;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param mixed $size
     */
    public function setSize($size): void
    {
        $this->size = $size;
    }


}

class Mercedes extends Car {
    public function __construct($color, $size)
    {
        $this->color=$color;
        $this->size= $size;
    }
}

$carOne= new Mercedes('White','2 Passenger');

$carOne->setCarColor("Black");
$carOne->setSize("4 Passenger");
echo $carOne->getCarColor().$carOne->getSize();
