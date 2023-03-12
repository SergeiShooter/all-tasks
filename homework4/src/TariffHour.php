<?php
class TariffHour extends TariffeAbs
{
    protected $priceKilometr = 0;
    protected $priceMinute = 200/60;
    public function __construct(int $distance, int $minutes)
    {
        parent::__construct($distance, $minutes);
        $this->minutes = $this->minutes - $this->minutes % 60 + 60;

    }
}
