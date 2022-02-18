<?php

class Student {
     
  var $first_name;
  var $last_name;
  var $country = 'None'; 

  function say_hello(){
      return 'Hello World!';
  }

}

$student1 = new Student;
$student1->first_name = "Jamal";
$student1->last_name = "Warsame";

$student2 = new Student;
$student2->first_name = "Samira";
$student2->last_name = "Diriye";


echo $student1->first_name . " " . $student1->last_name . "<br />";
echo $student2->first_name . " " . $student2->last_name . "<br />";

echo $student1->say_hello() ."<br/>";
echo $student2->say_hello() ."<br/>";

$class_vars= get_class_methods('Student');
echo "Class methods: " . implode(',',$class_methods)."<br/>";


if(method_exists('Student', 'say_hello')){
    echo "Method say_hello() exists in Student class.<br/>";
} else{
  echo "Method say_hello() doesn't exist in Student class.<br/>";
}

?>
