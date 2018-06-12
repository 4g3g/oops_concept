<?php

class Classone
{

var $var1="keep it up";
var $var2;

function print_string($name)
{
$v1 = "test me";
echo "Hello ".$name;
}


}

class Classtwo extends Classone
{

function print_string($name)
{

echo "your name is ".$name;
echo $this->var1;
}


}

$classname = new Classtwo;
$classname->print_string("shubham");



?>
