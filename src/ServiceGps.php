<?php
class ServiceGps implements ServiceIface
{
    private $pricePerHour;

    public function __construct(int $pricePerHour)
    {
        $this->pricePerHour = $pricePerHour;
    }

    public function apply(TariffIface $tariff, &$price)
    {
        $hours = ceil(($tariff->getMinutes() / 60));
        $price += $this->pricePerHour * $hours;
    }
}