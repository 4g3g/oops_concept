<?php

abstract class Abstct
{

abstract function t1();
/*{
echo "this is t1";
}
*/

}


class Abt extends Abstct
{

function t1()
{
//return $this->t1();
echo "hello";
}
}

$obj = new Abt();

$obj->t1();


?>
