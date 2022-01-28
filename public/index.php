<?php
require_once "../src/ServiceIface.php";
require_once "../src/TariffIface.php";

$tariff = new BasicTariff();
$tariff->addService(new serviceGPS(15));
echo $tariff->getPrice();
