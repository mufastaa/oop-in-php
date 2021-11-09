<?php
include "shape.php";



class Triangle implements shapeInterface{

     public function getArea(){
         echo 'Triangle Area'.'<br>';

     }

}
class Rectangle implements shapeInterface{
    public function getArea(){
        echo 'Rectangle Area';
    }

}
$tri= new Triangle;
echo $tri->getArea();

$rec= new Rectangle;
echo $rec->getArea();


