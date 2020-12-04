<?php
    require_once('car.php');
    require_once('uberX.php');
    require_once('uberPool.php');
    require_once('account.php');

    $uberX = new uberX("CVB123", new account("Andres Herrera", "AND456"), "Chevrolet", "Spark");
    $uberX->printDataCar();

    $uberPool = new UberPool("TYTU567", new account("Andrea Ferran", "ANDA765"), "Dodge", "Attitude");
    $uberPool->printDataCar();
?>