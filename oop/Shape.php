<?php

// Inheritence and encapsulation

// Use abstract classes to only create functionality for sub-classes.
// They're never meant to be instattiated themselves.
abstract class Shape
{
    protected $color;

    public function __construct($color = 'red')
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    // use abstract methods to require sub-classes to define getArea();
    abstract protected function getArea();
}

class Square extends Shape
{
    protected $length = 4;

    public function getArea()
    {
        return pow($this->length, 2);
    }
}

class Triangle extends Shape
{
    protected $base = 4;
    protected $height = 7;

    // overide parent class method
    public function getArea()
    {
        return .5 * $this->base * $this->height;
    }
}

class Circle extends Shape
{
    protected $radius = 5;

    public function getArea()
    {
        return M_PI * pow($this->radius, 2);
    }
}

echo (new Circle)->getArea();
