<?php
    require_once 'Vehicle.php';

    class Bus extends Vehicle
    {
        private $places;

        public function getPlaces()
        {
            return $this->places;
        }

        public function setPlaces($places)
        {
            $this->places = $places;
        }

        public function toFuel()
        {
            echo"Implement the to fuel for Bus";
        }
    }
?>