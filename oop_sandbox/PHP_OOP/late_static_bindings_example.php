<?php

class Reptile{
    protected static $type_of_animal="Reptile";

    protected static function move(){
        echo "slithers";
    }

    protected static function bite(){
        echo "bites and eats prey";
    }

    public static function reveal_animal_type() {
        echo 'self: ' . self::$type_of_animal . "<br />";
        echo 'static: ' . static::$type_of_animal . "<br />";
    
        echo 'get_class: ' . get_class() . "<br />";
        echo 'get_called_class: ' . get_called_class() . "<br />";
    }

}

class Snake extends Reptile{

    protected static $type_of_animal = "Snake";

    protected static $species="Snake";

    protected $hisses = true;

}

class CobraSnake extends Snake{

    protected static $type_of_animal = "Cobra";

    private $carries_venom = true;

    protected static function move(){
        echo "slithers and rises up ready to attack";
    }

    protected static function bite(){
        echo "bites and eats prey injecting venom";
    }


}


Reptile::reveal_animal_type();
echo "<hr />";
Snake::reveal_animal_type();
echo "<hr />";
Cobra::reveal_animal_type();



?>