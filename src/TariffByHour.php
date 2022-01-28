<?php
class TariffByHour extends TariffAbstract
{
    protected $pricePerKilometer = 0;
    protected $pricePerMinutes = 200;

    public function __construct(int $distance, int $minutes)
    {
        parent::__construct($distance, $minutes);
        $this->minutes = $this->minutes - $this->minutes % 60 + 60;
    }
}