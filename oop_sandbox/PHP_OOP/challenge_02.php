<?php

class Language {
  var $is_written = true;
  var $is_spoken = true;
  var $is_written_from_left_to_right = true;
  
  function get_Language(){
    return $this->is_written . " and " . $this->is_spoken . "{Parent class}";
  }

}

class EuropeanLanguage extends Language {
  var $is_written = true;
  var $is_spoken = true;
  var $is_written_from_left_to_right = true;
  
  function get_Language(){
    return $this->is_written . " and " . $this->is_spoken . "{Parent class}";
  }

}

class AfricanLanguage extends Language {
  var $is_written = false;
  var $is_spoken = true;
  
  function get_Language(){
    return $this->is_written . " " . $this->is_spoken . "{African Language class}";
  }

}

class MiddleEasternLanguage extends Language {

  var $is_written_from_left_to_right = false;
  var $is_written_from_right_to_left = true;

  
  function get_Language(){
    return $this->is_written . " and " . $this->is_spoken . "{Middle Eastern class}";
  }

}

Class Wolof extends AfricanLanguage{
  var $countries_spoken_in = ["The Gambia", "Senegal", "Mauritania"];

    function get_Language(){
      return $this->is_written . " " . $this->is_spoken . "{Only spoken, not written}";
    }

}

Class Arabic extends MiddleEasternLanguage{

  function get_Language(){
    return $this->is_written . " and " . $this->is_spoken . "{Both spoken, and written}";
  }

}

Class French extends EuropeanLanguage{

  var $contients_spoken_in = ["Europe", "Africa", "North America"];

  function get_Language(){
    return $this->is_written . " and " . $this->is_spoken . "{Both spoken, and written}";
  }

}

Class Portuguese extends EuropeanLanguage{

  var $contients_spoken_in = ["Europe", "Africa", "South America"];

  function get_Language(){
    return $this->is_written . " and " . $this->is_spoken . "{Both spoken, and written}";
  }

}


$language = new Language;

$african_language = new AfricanLanguage;

$wolof = new Wolof;

$french = new French;

$portuguese = new Portuguese;

$arabic = new Arabic;

echo $language -> get_Language() . "<br/>";

echo $african_language -> get_Language() . "<br/>";

echo "Wolof: " .$wolof -> get_Language() . "<br/>";

echo "French: " .$french -> get_Language() . "<br/>";

echo "Portuguese: " .$portuguese -> get_Language() . "<br/>";

echo "Arabic: " . $arabic -> get_Language() . "<br/>";

?>

