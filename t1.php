<?php

require "/home/shubham/projects/oops/Stat1.php";



//$obj = new Stat1();

//$obj->test("htll p");

//Stat1::test();

$t = array("15","18","20","25","30");
$p="";
foreach($t as $k)
{

	//echo $k."\n";
	//$p="";
	if($k%2 == 0)
	{
		$p[] .= $k;
		echo $k."->yes\n";
	}
	//echo $p;
	//print_r($p);
}
echo "hmm";
print_r($p);


?>
