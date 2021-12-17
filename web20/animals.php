<?php

class Animal
{
    private  $family;
    protected $food;
    public function __construct($family, $food)
    {
        $this->family = $family;
        $this->food = $food;
    }
    public function get_family()
    {
        return $this->family;
    }
}

class Cow extends Animal
{

    private $owner;
    public function __construct($family, $food)
    {
        parent::__construct($family, $food);
    }
}

class  Lion extends Animal
{
    public function __Construct($family, $food)
    {
        parent::__construct($family, $food);
    }
    public function get_food()
    {
        return $this->food;
    }
}
$cow = new Cow("Herbivore ", "Grass");
echo 'The Cow belongs to ' . $cow->get_family() . "";

$lion = new Lion("Carnivore", "Meat");
echo 'The Lion belongs to ' . $lion->get_family() . "";
echo ' the Lion Eats ' . $lion->get_food() . "";
