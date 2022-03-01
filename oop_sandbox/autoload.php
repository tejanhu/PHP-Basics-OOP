<?php

function my_autoload($class){
    if(preg_match('/\A\w+\Z/', $class)){
        include 'chain_gang/private/classes/' . $class . ".class.php";
    }
}

spl_autoload_register('my_autoload');

$bike = new Bicycle;

$bike -> owner = "Jonathon";

echo $bike -> owner;

?>