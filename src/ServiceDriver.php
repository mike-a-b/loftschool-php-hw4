<?php
class ServiceDriver implements ServiceIface
{
    private $price;

    public function __construct(int $price)
    {
        $this->price = $price;
    }

    public function apply(TariffIface $tariff, &$price)
    {
        $price += $this->price;
    }
}
