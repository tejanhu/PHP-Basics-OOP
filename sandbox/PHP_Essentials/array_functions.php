<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Array Functions</title>
  </head>
  <body>
  <?php
    $numbers = array(0 => 8, 1 => 23, 2 => 15, 3 => 42, 4 => 16, 5 => 4);
    echo "The array's values are: ";
    for($i = 0; $i<count($numbers); $i++){
      print_r($numbers[i]);
  }
  ?>
  <?php $mixed_array = array(7, "Oliver", "Barn", array("cat", "dog", "horse", "sheep"));
  echo $mixed_array[2];?> 
  <br />
   <?php echo $mixed_array[3][1];?>
  <br />
  <?php $mixed_array[3][1] = "spider";
  echo $mixed_array[3][1] ?>
  <br />
  <?php $mixed_array[3][3] = "shephard dog";
  $mixed_array[3][] = "fox" ?>
  <?php echo print_r($mixed_array);?>
  <br />
Count:<?php echo count($numbers);?><br />
Max:<?php echo max($numbers);?><br />
Min:<?php echo min($numbers);?><br />
<br />
<pre>
Sort:<?php sort($numbers); print_r($numbers)?><br />
Reverse Sort:<?php rsort($numbers); print_r($numbers)?><br />
</pre>
<br />
Implode: <?php echo $num_string = implode(" | ", $numbers); ?> <br />
Explode: <?php print_r(explode(" | ", $num_string)); ?> <br />

42 in array?: <?php echo in_array(42, $numbers); ?> <br />
32 in array?: <?php echo in_array(32, $numbers); ?> <br />

  </body>
</html>
