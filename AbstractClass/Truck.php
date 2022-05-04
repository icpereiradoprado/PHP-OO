<?php
    require_once 'Vehicle.php';

    class Truck extends Vehicle
    {
        private $capacity;

        public function getCapacity()
        {
            return $this->capacity;
        }

        public function setCapacity($capacity)
        {
            $this->capacity = $capacity;
        }

        public function toFuel()
        {
            echo"Implement the to fuel for Truck";
        }
    }
?>