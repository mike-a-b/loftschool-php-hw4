<?php
interface ServiceIface
{
    public function apply(TariffIface $tariff, &$price);
}
