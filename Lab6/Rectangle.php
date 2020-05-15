<?php


class Rectangle extends Figure
{
    private $a, $b; //length of the sides
    const SIDES_COUNT = 4;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function getArea()
    {
        return $this->a * $this->b;
    }

    public final function infoAbout()
    {
        return "This is a ".__CLASS__." class. It has " .self::SIDES_COUNT. " sides.";
    }
}