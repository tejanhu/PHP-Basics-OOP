<?php

class Tricycle {
     
  public $brand;
  public $model;
  public $year; 
  public $description = "None";
  private $weight_kg = 0.0;
  protected $wheels = 3;

  public function name(){
    return "Brand: " . $this->brand . ", Model: " . $this->model . ", Year: " . $this->year;
  }


  public function get_weight_lbs(){
    return floatval($this->weight_kg) * 2.204622618 ."lbs";
}

  public function set_weight_lbs($value){
  $weight_lbs = floatval($this->weight_kg) / 2.204622618;
}

  public function get_weight_kg(){
      return $this -> weight_kg . "kg";
  }

  public function set_weight_kg($value){
    $this -> weight_kg = floatval($value);
}

  public function wheel_details(){
    $no_of_wheels = $this -> wheels ==1 ? "1 wheel" : "{$this->wheels} wheels";
      return "It has " . $no_of_wheels;
  }

}

class Unicycle extends Tricycle{
  protected $wheels = 1;

  public function bug_test(){
    return $this->weight_kg;
  }

  }

  $unicycle = new Unicycle;

  $unicycle->set_weight_kg(4.0) ."<br/>";
  echo $unicycle->get_weight_kg() ."<br/>";
  $unicycle->set_weight_lbs(4.0) ."<br/>";
  echo $unicycle->get_weight_lbs() ."<br/>";
  echo "Unicycle:";
  echo $unicycle-> wheel_details() . "<br/>";

$tricycle = new Tricycle;
echo "Tricycle:";
echo $tricycle-> wheel_details() . "<br/>";
$tricycle->set_weight_kg(5.0) ."<br/>";
echo $tricycle->get_weight_kg() ."<br/>";
$tricycle->set_weight_lbs(7) ."<br/>";
echo $tricycle->get_weight_lbs() ."<br/>";


$tricycle -> brand = "Wolverine";
$tricycle -> model = "Red";
$tricycle -> year = "1995";





echo $tricycle->name() ."<br/>";

// echo $unicycle -> bug_test() ."kg<br/>";

// echo $tricycle->weight_kg ."<br/>";



?>

