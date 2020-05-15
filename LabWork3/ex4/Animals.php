<?php
    $lion = new Cats("Lion", 4, false, true, "Africa", true, "hidden");
    $wolf = new Dogs("Wolf", 4, false, true, "any wilderness", true, "chasing");
    $eagle = new Birds("Eagle", 2, true, true, "mountains which far from humans", true, "nosediving");

    $eagle->maxHeight = 9000;
    $eagle->maxSpeed = 320;
    $lion->maxSpeed = 80;
    $lion->duration = "short";
    $wolf->maxSpeed  =  65;
    $wolf->duration = "till the drained victim";

    $animals = array($eagle, $lion, $wolf);



class Animals
{
    public $name = "";
    public $n_of_legs = 0;
    public $isFly = false;
    public $isSwim = false;
    public $location = "";
    public $isPredator = false;
    public $type = "";

    public function __construct($name, $number_of_legs, $is_fly, $is_swim, $location, $is_predator, $type){
        $this->name = $name;
        $this->n_of_legs = $number_of_legs;
        $this->isFly = $is_fly;
        $this->isSwim = $is_swim;
        $this->location = $location;
        $this->isPredator = $is_predator;
        $this->type = $type;
    }

    public function getName(){
        return $this->name;
    }

    public function getLegs(){
        return $this->n_of_legs;
    }

    public function getLoc(){
        return $this->location;
    }

    public function getType(){
        return $this->type;
    }

    public function isFly(){
        if($this->isFly) return "can fly";
        else return "cannot fly";
    }

    public function isSwim(){
        if($this->isSwim) return "adapted for swimming";
        else return "not adapted for swimming";
    }

    public function isPredator(){
        if($this->isPredator) return "predator";
        else return "herbivorous";
    }

    public function toString(){
        print $this->getName() . " is an " .__CLASS__. " with " . $this->getLegs() . " legs, which " . $this->isFly() . " and " .$this->isSwim(). ". Habitat of these animals is ". $this->getLoc() . ".";
    }
}

class Birds extends Animals{
    public $maxHeight = 0;
    public $maxSpeed = 0;

    public function addition(){
        print $this->getName() . " is " . $this->isPredator() . " and type of hunting is " . $this->getType() . ", which will be effective with speed as " . $this->maxSpeed . " and flying at a height " . $this->maxHeight . ".";
    }

}

class Cats extends Animals{
    public $maxSpeed = 0;
    public $duration = "";

    public function addition(){
        print $this->getName() . " is " . $this->isPredator() . " and type of hunting is " . $this->getType() . ", as all cats they are fast at " .$this->duration. " distance and top speed of them is " .$this->maxSpeed . ".";
    }
}

class Dogs extends Animals{
    public $maxSpeed = 0;
    public $duration = "";

    public function addition(){
        print $this->getName() . " is " . $this->isPredator() . " and type of hunting is " . $this->getType() . ", as all dogs they are not so fast, but they will pursuit " . $this->duration . " and top speed of them is " .$this->maxSpeed . ".";
    }
}