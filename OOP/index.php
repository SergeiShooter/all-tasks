<?php
abstract class Unit
{
    public $helth = 10;
    public $name;
    public $position = 0;
    public $speed = 20;
    public function __construct($name)
    {
        $this->name= $name;
    }


    public function say()
    {
        echo 'I am' . $this->name;
    }
    public function move ()
    {
        $this->position = $this->position + 2*$this->speed;
    }
    public function getInfo()
    {
        echo 'I am ' . $this->name . ', my speed = ' . $this->speed . ' and my position = ' . $this->position;
    }
}
class GroundUnit extends Unit
{
    public function move ()
    {
        $this->position = $this->position + $this->speed;
    }
}
class FlyingUnit extends Unit
{
    public function move ()
    {
        $this->position = $this->position + 2*$this->speed;
    }
}


$marines = new GroundUnit ('Marines');
$stealth = new FlyingUnit('Stealth');

$units = [$marines, $stealth];
foreach ($units as $unit) {
    $unit->move();
    $unit->getInfo();
    echo '<br>';
}



//echo 'before move: <br>';
//$marines->getInfo();
//echo '<br>';
//$stealth->getInfo();
//echo '<br>';
//$marines->move();
//$stealth->move();
//echo 'after move: <br>';
//$marines->getInfo();
//echo '<br>';
//$stealth->getInfo();




//$marines = new Unit('Marines');
//$stealth = new Unit('Stealth');
//
//$marines->say();
//echo '<br>';
//echo $marines->helth;
//echo '<br>';
//$stealth->say();
//echo '<br>';
//echo $stealth->helth=20;