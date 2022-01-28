<?php
interface TariffIface
{
    public function getPrice() : int;
    public function addService(ServiceIface $service) : self;
    public function getMinutes() : int;
    public function getDistance() : int;
}
