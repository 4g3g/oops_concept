<?php

class Name {
   var $_firstName;
   var $_lastName;
   
   function Name_fun($first_name, $last_name) {
      $this->_firstName = $first_name;
      $this->_lastName = $last_name;
   }
}

$obj = new Name();
$obj->Name_fun("shubham","Dixit");
print_r($obj);

?>
