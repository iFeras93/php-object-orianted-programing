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

print_r([
    $product1->name,
    $product2->name,
]);
