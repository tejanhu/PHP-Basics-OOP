<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Loops: while</title>
  </head>
  <body>

  <?php
    $numbers = array(8, 23, 15, 42, 16, 4);
    echo "The array's values are: ";
    for($i = 0; $i<count($numbers); $i++){
      echo $numbers[i];
  }
  ?> <br/>
    <?php
    echo "The array's values are: ";
    foreach($numbers as $num_arr){
      echo $num_arr . " ";
  }
  ?>

<br/>
    <?php
    $mixed_array = array(
      "country_of_origin" => "Sierra Leone",
      "birth_year"=> 1980,
      "maritial_status"=> "Single",
      "occupation"=> "Doctor"
    );
    foreach($mixed_array as $key => $value ){
      $clean_key = ucwords(str_replace("_", " ", $key));
      echo "{$clean_key}: {$value}<br/>";
  }
  ?>
  </body>
</html>
