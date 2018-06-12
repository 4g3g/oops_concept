<?php

class ConstExmple
{

var $v1 = "test";

function __construct($par1, $par2)
{

$this->title = $par1;

$this->price = $par2;

}


}

$obj = new ConstExmple("maths",50);

print_r($obj);

?>
