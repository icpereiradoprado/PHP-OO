<?php
    require_once 'Car.php';
    require_once 'Motorcycle.php';
    require_once 'Bus.php';
    require_once 'Truck.php';

    $objCar = new Car();
    $objMotorCycle = new Motorcycle();

    $objCar->setMark("Fiat");
    echo $objCar->getMark();
    echo "<br>";
    $objCar->setDoors(4);
    echo $objCar->getDoors();
    echo "<br>";
    
    $objMotorCycle->setMark("Honda");
    echo $objMotorCycle-> getMark();
?>