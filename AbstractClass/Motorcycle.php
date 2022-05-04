<?php
    require_once 'Vehicle.php';

    class Motorcycle extends Vehicle
    {
        private $engineCapacity;

        public function getEngineCapacity()
        {
            return $this->engineCapacity;
        }

        public function setEngineCapacity($engineCapacity)
        {
            $this->engineCapacity = $engineCapacity;
        }

        public function toFuel()
        {
            echo"Implement the to fuel for motorcycle"; 
        }
    }

?>