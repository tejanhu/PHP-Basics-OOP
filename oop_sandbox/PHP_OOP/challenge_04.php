<?php

class Tricycle {
     
  public $brand;
  public $model;
  public $year; 
  public $description = "None";
  private $weight_kg = 0.0;
  protected static $wheels = 3;
  public static $instance_count = 0;
  public const CATEGORIES = ["Road", "Mountain", "BMX", "Hybrid", "Cruiser", "City"];
  public static $category;
  public $instances;
  protected static $price = 500;

  public function name(){
    return "Brand: " . $this->brand . ", Model: " . $this->model . ", Year: " . $this->year;
  }

  public static function create(){

    $class_name = get_called_class();

    $obj = new $class_name;

      self::$instance_count++;
      return $obj;
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

  public static function wheel_details(){
    $no_of_wheels = static::$wheels == 1 ? "1 wheel" : static::$wheels . " wheels";
      return "It has " . $no_of_wheels;
  }

  public static function set_price(){
    $price = static::$price;
  }

  public static function get_price(){
    return static::$price;
  }

}

class Unicycle extends Tricycle{
  protected static $wheels = 1;

  public static $cheap = true;

  public function bug_test(){
    return $this->weight_kg;
  }

  public static function set_price(){
    if(static::$cheap == true){
        $price = 400;

        static::$price = $price;
    }
    else{
        parent::set_price;
    }
  }


  }




$tricycle = new Tricycle;
echo "Tricycle: ";
echo $tricycle::wheel_details() . "<br/>";
$tricycle->set_weight_kg(5.0) ."<br/>";
echo $tricycle->get_weight_kg() ."<br/>";
$tricycle->set_weight_lbs(7.0) ."<br/>";
echo $tricycle->get_weight_lbs() ."<br/>";


$tricycle -> brand = "Wolverine";
$tricycle -> model = "Red";
$tricycle -> year = "1995";


echo $tricycle->name() ."<br/>";

$tricycle::set_price();
echo "tricycle price: $";
echo $tricycle::get_price() . "<br />";
$tricycle->category = Tricycle::CATEGORIES[4];
echo "Category: " . $tricycle->category . "<br />";


$unicycle = new Unicycle;
echo "Unicycle: ";
echo $unicycle::wheel_details() . "<br/>";
$unicycle->set_weight_kg(4.0) ."<br/>";
echo $unicycle->get_weight_kg() ."<br/>";
$unicycle->set_weight_lbs(4.0) ."<br/>";
echo $unicycle->get_weight_lbs() ."<br/>";
$unicycle::set_price();
echo "unicycle price: $";
echo $unicycle::get_price() . "<br />";
$unicycle -> category = Unicycle::CATEGORIES[5];
echo "Category: " . $unicycle->category . "<br />";

echo Tricycle::$instance_count . "<br/>";

echo Unicycle::$instance_count . "<br/>";

$tri = Tricycle::create();
echo Tricycle::$instance_count . "<br/>";

$uni = Unicycle::create();
echo Unicycle::$instance_count . "<br/>";



// echo $unicycle -> bug_test() ."kg<br/>";

// echo $tricycle->weight_kg ."<br/>";



?>

