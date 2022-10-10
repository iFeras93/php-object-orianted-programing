<?php
/*
 * Make class called student
 * - this student hase property (public name,protected age,private id, etc)
 * - make functions with access modifier [
 * public setName(), getName()
 * protected setAge(), private getAge()
 * ]
 */


class Student
{
    private $name;
    public $age;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    private function setAge($age){
        $this->age= $age;
    }

    private function getAge(){
        return $this->age;
    }
}

$student= new Student;
$student->setName("test student!");

// print student name
echo $student->getName();
