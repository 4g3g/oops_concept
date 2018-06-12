<?php

class Mobile
{
 var $price;
 var $title;

function setPrice($par)
{

$this->price = $par;

}

function setName($par)
{

$this->title = $par;

}

function getDetails ()
{

echo $this->title ."\n";
echo $this->price;

}

}

$mobile = new Mobile();

$mobile->setName("Xiomi");
$mobile->setPrice("10k ruppes");
$mobile->getDetails();
?>
