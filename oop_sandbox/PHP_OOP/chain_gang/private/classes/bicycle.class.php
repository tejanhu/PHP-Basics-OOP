<?php

class Bicycle
{

    public const CATEGORIES = ["road", "mountain", "hybrid", "cruiser", "city", "BMX"];

    public const GENDERS = ["mens", "womens", "unisex"];

    protected const CONDITION_OPTIONS = [
        1 => "Beat up",
        2 => "Decent",
        3 => "Good",
        4 => "Great",
        5 => "Like New"
    ];

    public $brand;

    public $model;

    public $year;

    public $category;

    public $color;

    public $description;

    public $gender;

    public $price;

    protected $condition_id;

    protected $weight_kg;

    public function __construct($args = [])
    {
        $this->brand = $args['brand'] ?? '';
        $this->model = $args['model'] ?? '';
        $this->year = $args['year'] ?? '';
        $this->category = $args['category'] ?? '';
        $this->description = $args['description'] ?? '';
        $this->color = $args['color'] ?? '';
        $this->price = $args['price'] ?? 0;
        $this->weight_kg = $args['weight_kg'] ?? 0;
        $this->gender = $args['gender'] ?? '';
        $this->condition_id = $args['condition_id'] ?? 3;

        // Caution: allows private/protected properties to be set
        // foreach ($args as $key => $value) {
        //     if (property_exists($this, $key)) {
        //         $this->$key = $value;
        //     }
        // }
    }



    public function set_weight_kg($value)
    {
        $this->weight_kg = floatval($value);
    }


    public function get_weight_kg()
    {
        return $this->weight_kg . "kg";
    }

    public function set_weight_lbs($value)
    {
        $this->weight_kg = floatval($value) / 2.204622618;
    }


    public function get_weight_lbs()
    {
        $weight_lbs = floatval($this->weight_kg) / 2.204622618;
        return $weight_lbs . "lbs";
    }

    public function condition()
    {
        if ($this->condition_id > 0) {
            return self::CONDITION_OPTIONS[$this->condition_id];
        } else {
            return "Not Known";
        }
    }
}

$bike = new Bicycle(['brand' => 'Jetski-BMX', 'model' => 'somekind', 'year' => 2020, 'category' => 'BMX', 'description' => 'beautiful bike', 'color' => 'blue', 'price' => 250, 'gender' => 'mens']);
?>