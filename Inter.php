<?php

interface Inter
{


function f1($par1);
}

class Test implements Inter
{
const abv = "123";
function f1($par1)
{

//const abc = "hello";

echo "this is f2".self::abv;
}

}

$obj = new Test();

$obj->f1("t");


?>
