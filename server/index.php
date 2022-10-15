<?php
    
    class Car
    {
        private $color = 'White';
        private $type = null;
        private $model = null;
        private $moving = false;
        
        public function isMoving()
        {
            return $this->moving;
        }

        public function move()
        {
            $this->moving = true;
        }

        public function setProperties($dcolor, $dtype, $dmodel)
        {
            $this->color = $dcolor;
            $this->type = $dtype;
            $this->model = $dmodel;
        }

        public function getProperties()
        {
            echo $this->color . '<br>';
            echo $this->type . '<br>';
            echo $this->model . '<br>';
        }
    }


    $mycar = new Car();
    $mycar->setProperties('green', 'toyota', 'camry505');
    $mycar->getProperties();

?>