<?php
abstract class TariffeAbs implements iTariffe
{
    protected $priceKilometr;
    protected $priceMinute;
    protected $distance;
    protected $minutes;
    protected $services = [];

    public function __construct(int $distance, int $minutes)
    {
        $this->distance = $distance;
        $this->minutes = $minutes;
    }
    public function countPrice(): int
    {
       $price = $this->distance * $this->priceKilometr + $this->minutes * $this->priceMinute;

       if ($this->services) {
           foreach ($this->services as $service) {
               $service->apply($this, $price);
           }
       }
       return $price;
    }

    public function addService(iService $service): iTariffe
    {
        array_push($this->services, $service);
        return $this;
    }

    public function getMinutes(): int
    {
        return $this->minutes;
    }

    public function getDistance(): int
    {
        return $this->distance;
    }
}