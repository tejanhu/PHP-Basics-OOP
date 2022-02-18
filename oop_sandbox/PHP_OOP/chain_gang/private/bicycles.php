<?php

class Bicycle{

    public const CATEGORIES = ["road","mountain", "hybrid", "cruiser", "city", "BMX"];

    public const GENDERS = ["mens","womens", "unisex"];

    public $brand;

    public $model;

    public $year;

    public $category;

    public $color;

    public $description;

    public $gender;

    public $price;

    public $condition_id;

    public $weight_kg;

    public function __construct($args=[]){
        $this->brand = $args['brand'] ?? $this->brand;
        $this->model = $args['model'] ?? $this->model; 
        $this->year = $args['year'] ?? $this->year;
        $this->category = $args['category'] ?? $this->category; 
        $this->description = $args['description'] ?? $this->description;
        $this->color = $args['color'] ?? $this->color; 
        $this->price = $args['price'] ?? $this->price;
        $this->gender = $args['gender'] ?? $this->gender; 
    }

    public function set_weight_kg($value){
        
    }


    public function get_weight_kg(){
        return $this->weight_kg;
    }

    public function set_weight_lbs($value){
        
    }


    public function get_weight_lbs(){

    }

    public function condition(){
        if($condition.id == 1){
            return "Beat up";
        } else if($condition.id == 2){
            return "Decent";
        } else if ($condition.id == 3){
            return "Good";
        } else if ($condition.id == 4){
            return "Great";
        } else if ($condition.id == 5){
            return "Like New";
        }
    }


}

$bike = new Bicycle(['brand' => 'Jetski-BMX', 'model' => 'somekind' , 'year' => 2020, 'category' => 'BMX', 'description' => 'beautiful bike', 'color' => 'blue', 'price' => 250, 'gender' => 'mens']);






?>