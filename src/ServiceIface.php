<?php
namespace homework4;

interface ServiceIface
{
    public function apply(TariffIface $tariff, &$price);
}
