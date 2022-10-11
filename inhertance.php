<?php
/*
 * Make class Laptop with properties (name,os,ram,model)
 * generate setter and getter for properties
 * make subClasses and inherit from laptop class [hp, mac, acer, lenovo]
 */

class Laptop{
    private $name;
    private $os;
    private $ram;
    private $model;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return Laptop
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOs()
    {
        return $this->os;
    }

    /**
     * @param mixed $os
     * @return Laptop
     */
    public function setOs($os)
    {
        $this->os = $os;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRam()
    {
        return $this->ram;
    }

    /**
     * @param mixed $ram
     * @return Laptop
     */
    public function setRam($ram)
    {
        $this->ram = $ram;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param mixed $model
     * @return Laptop
     */
    public function setModel($model)
    {
        $this->model = $model;
        return $this;
    }

    public function getInfo()
    {
        return $this->getName().'|'.$this->getOs();
    }

}

class Acer extends Laptop {}
class lenovo extends Laptop {}
class HP extends Laptop {}
class Mac extends Laptop {
}

$laptop= new Mac();
$laptop->setName("Macbook air M1!")->setOs("macos");
echo $laptop->getInfo().PHP_EOL;
