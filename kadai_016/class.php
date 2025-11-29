<?php
class Food
{
    public $name;
    public $price;
    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
    function show_price()
    {
        echo $this->price;
    }
}
class Animal
{
    public $name;
    public $height;
    public $weight;
    public function __construct($name, $height, $weight)
    {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }
    function show_height()
    {
        echo $this->height;
    }
}

$potato = new Food('potato', 250);
$dog = new Animal('dog', 60, 5000);
print_r($potato);
echo '<br>';
print_r($dog);
echo '<br>';


$potato->show_price();
echo '<br>';

$dog->show_height();
