<?php
include "../src/ServiceIface.php";
include "../src/TariffIface.php";
include "../src/TariffAbstract.php";
include "../src/TariffBase.php";
include "../src/ServiceGps.php";
include "../src/ServiceDriver.php";

$tariff = new TariffBase(5, 60);
$tariff->addService(new serviceGPS(15));
$tariff->addService(new ServiceDriver(100));
echo $tariff->getPrice();
