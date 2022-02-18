<?php

class Tricycle {
     
  var $brand;
  var $model;
  var $year; 
  var $description = "None";
  var $weight_kg = 0.0;

  function name(){
    return "Brand: " . $this->brand . ", Model: " . $this->model . ", Year: " . $this->year;
  }

  function weight_lbs(){
    return floatval($this->weight_kg) * 2.204622618;
}

  function set_weight_lbs($weight_lbs){
   $this -> weight_kg = floatval($weight_lbs) / 2.204622618;
}

}

$tricycle = new Tricycle;

$tricycle -> brand = "Wolverine";
$tricycle -> model = "Red";
$tricycle -> year = "1995";
$tricycle -> weight_kg = 5.0;
$weight_lbs = 7;

echo $tricycle->name() ."<br/>";
echo $tricycle->weight_kg ."<br/>";
echo $tricycle->weight_lbs() ."<br/>";
$tricycle->set_weight_lbs($weight_lbs) ."<br/>";
echo $tricycle->weight_kg ."<br/>";
?>

