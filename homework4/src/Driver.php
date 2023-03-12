<?php
class Driver implements iService
{
    private $price;
    public function __construct(int $price)
    {
        $this->price = $price;
    }
    public function apply(iTariffe $tariffe, &$price)
    {
        $price += $this->price;
    }
}