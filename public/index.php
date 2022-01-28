<?php
include "../src/ServiceIface.php";
include "../src/TariffIface.php";
include "../src/TariffAbstract.php";
include "../src/TariffBase.php";
include "../src/ServiceGps.php";
include "../src/ServiceDriver.php";
include "../src/TariffStudent.php";
include "../src/TariffByHour.php";

//$tariff = new TariffBase(5, 60);
$tariff = new TariffStudent(5, 60);
//$tariff = new TariffByHour(1, 1);
$tariff->addService(new serviceGPS(15));
//$tariff->addService(new ServiceDriver(100));
echo $tariff->getPrice();
