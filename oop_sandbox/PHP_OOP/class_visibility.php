<?php

class Student {
     
  public $first_name;
  public $last_name;
  public $country = 'None'; 
  protected $registration_id;
  private $tuition_grant = 1000;
  private $grade = "C";

  public function get_full_name(){
    return $this-> first_name . " " . $this->last_name;
}


public function get_tuition_grant(){
  return $this->tuition_grant;
}

public function get_grade(){
  return $this->grade;
}

public function hello_world(){
  return 'Hello World!';
}

protected function ola_familia(){
  return 'Ola Familia!';
}

private function hello_moi(){
  return 'Bonjour!';
}

public function say_hello(){
  return 'Hello World!';
}

}

class PartTimeStudent extends Student{
  public function say_hello_to_parent(){
    return $this->ola_familia();
  }
}

$student1 = new Student;
$student1->first_name = "Jamal";
$student1->last_name = "Warsame";

$student2 = new Student;
$student2->first_name = "Samira";
$student2->last_name = "Diriye";

$student3 = new PartTimeStudent;
echo $student3->say_hello_to_parent() . "<br />";

echo $student1->first_name . " " . $student1->last_name . "<br />";
echo $student2->first_name . " " . $student2->last_name . "<br />";


echo $student1->say_hello() ."<br/>";
echo $student2->say_hello() ."<br/>";

echo $student1->hello_world() ."<br/>";
echo $student2->hello_world() ."<br/>";

// echo $student1->ola_familia() ."<br/>";
// echo $student2->ola_familia() ."<br/>";

echo $student1->say_hello() ."<br/>";
echo $student2->say_hello() ."<br/>";

// echo $student1->hello_moi() ."<br/>";
// echo $student2->hello_moi() ."<br/>";


echo $student1->get_full_name() . "<br />";
echo $student2->get_full_name() . "<br />";

// Overloading - Dynamic Property

$student3 -> tuition_grant = 2500;
echo $student3->tuition_grant . '<br/>';
echo $student1->get_tuition_grant() . '<br/>';

// $student1->grade = "U";
// echo $student1->grade . '<br/>';
// echo $student1->get_grade() . '<br/>';

echo $student2 -> registration_id;
echo $student2 -> $tuition_grant;



?>
