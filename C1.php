<?php

class C1
{

function t1()
{
echo "I am t1";
}

}

class C2 extends C1
{

function t2()
{

echo "I am t2";

}
}

class C3 extends C2
{

function t3()
{

echo "this is t3";

}

function his()
{

echo $this->t1();
echo $this->t2();
echo $this->t3();

}

}

$obj = new C3();
$obj->his();





?>
