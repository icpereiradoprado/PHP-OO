<?php
    require_once 'Vehicle.php';

    class Car extends Vehicle
    {
        private $doors;

        public function getDoors()
        {
            return $this->doors;
        }

        public function setDoors($doors)
        {
            $this->doors = $doors;
        }

        public function toFuel()
        {
            echo"Implement the to fuel for car";
        }
    }
?>