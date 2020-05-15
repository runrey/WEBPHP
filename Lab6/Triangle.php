<?php


class Triangle extends Figure
{
    private $a, $b, $c; //length of triangle sides
    const SIDES_COUNT = 3;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function getArea()
    {
        $p = ($this->a + $this->b + $this->c)/2;
        return abs($p * ($p - $this->a) * ($p - $this->b) * ($p - $this->c));
    }

    public final function infoAbout()
    {
        return "This is a ".__CLASS__." class. It has " .self::SIDES_COUNT. " sides.";
    }
}