<?php

class User {
  var $is_admin = false;
  var $f_name;
  var $l_name;
  var $username; 
  

  function full_name(){
    return $this->f_name . " " . $this->l_name;
  }

}

Class Customer extends User{


    var $town;
    var $county;
    var $country;

    function get_location(){
        return $this->town . ", " . $this->county . ", " . $this->country;
    }

}

Class AdminUser extends User{


    var $is_admin = true;

    function full_name(){
        return $this->f_name . " " . $this->l_name . "{Admin}";
      }

}

$user = new User;
$user -> f_name = "James";
$user -> l_name = "Mcquinn";
$user -> username = "jmcquinn";

$guest = new Customer;
$guest -> f_name = "Jack";
$guest -> l_name = "Jones";
$guest -> username = "jjones";
$guest -> town = "Basildon";
$guest -> county = "Essex";
$guest -> country = "England";

echo $user -> full_name() . "<br/>";
echo $guest -> full_name() . "<br/>";

echo $guest -> get_location() . "<br/>";
// echo $user -> get_location() . "<br/>";


echo get_parent_class($user) . "<br/>";
echo get_parent_class($guest) . "<br/>";

if(is_subclass_of($guest, 'User')){
    echo "Instance is a subclass of User.<br/>";
}

$parents = class_parents($guest);
echo implode(', ', $parents) . "</br>";

?>

