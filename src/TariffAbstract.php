<?php
abstract class TariffAbstract implements TariffIface
{
    protected $pricePerKilometer;
    protected $pricePerMinutes;
    protected $distance;
    protected $minutes;

    protected $services;

    public function __construct(int $distance, int $minutes)
    {
        $this->distance = $distance;
        $this->minutes = $minutes;
    }

    public function getPrice(): int
    {
        $price = $this->distance * $this->pricePerKilometer + $this->minutes * $this->pricePerMinutes;

        if ($this->services) {
            foreach ($this->services as $service) {
                $service->apply($this, $price);
            }
        }
        return $price;
    }

    public function addService(ServiceIface $service): TariffIface
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
