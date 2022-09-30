<?php

    class Triangulo{
        private $LadoA;
        private $LadoB;
        private $LadoC;

        public function setLadoA($value){
            $this->LadoA = $value;
        }
        public function getLadoA(){
            return $this->LadoA;
        }
        public function setLadoB($value){
            $this->LadoB = $value;
        }
        public function getLadoB(){
            return $this->LadoB;
        }
        public function setLadoC($value){
            $this->LadoC = $value;
        }
        public function getLadoC(){
            return $this->LadoC;
        }
        public function Calculo(){
            if($this->LadoA == $this->LadoB && $this->LadoA == $this->LadoC){
                echo 'equilatero';
            }elseif ($this->LadoA == $this->LadoB || $this->LadoA == $this->LadoC || $this->LadoB == $this->LadoC ) {
                echo 'isosceles';
            }else{
                echo 'escaleno';
            }
        }

    }

?>