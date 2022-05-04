<?php
    abstract class Vehicle
    {
        private $mark;
        private $model;

        public function getMark()
        {
            return $this->mark;
        }
        public function setMark($mark)
        {
            $this->mark = $mark;
        }

        public function getModel()
        {
            return $this->model;
        }
        public function setModel($model)
        {
            $this->model = $model;
        }

        abstract function toFuel();
    }
?>