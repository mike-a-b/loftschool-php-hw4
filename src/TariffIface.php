<?php
interface TariffIface
{
    public function getPrice() : int;
    public function addService(ServiceIface $service);
    public function getMinutes();
    public function getDistance();
}