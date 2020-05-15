<?php


class Square extends Figure
{
    private $a; //length of a side
    const SIDES_COUNT = 4;

    public function __construct($a)
    {
        $this->a = $a;
    }

    public function getArea()
    {
        return $this->a * $this->a;
    }

    public final function infoAbout()
    {
        return "This is a ".__CLASS__." class. It has " .self::SIDES_COUNT. " sides.";
    }
}