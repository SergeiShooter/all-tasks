<?php
class GPS implements iService
{
    private $priceHour;
    public function __construct(int $priceHour)
    {
        $this->priceHour = $priceHour;
    }
    public function apply(iTariffe $tariffe, &$price)
    {
        $hours = ceil($tariffe->getMinutes() / 60);
        $price += $this->priceHour * $hours;
    }
}