<?php
    include "account.php";
    include "car.php";

    $car = new Car("QWE123", new Account("Andres Herrera", "AZD954"));
    $car->passenger = 4;
    $car->printDataCar();
?>