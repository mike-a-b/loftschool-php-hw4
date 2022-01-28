<?php
require_once "../src/ServiceIface.php";
require_once "../src/TariffIface.php";
require_once "../src/TariffAbstract.php";

$tariff = new T();
$tariff->addService(new serviceGPS(15));
echo $tariff->getPrice();
