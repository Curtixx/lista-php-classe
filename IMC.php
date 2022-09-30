<?php

    class IMC{
        private $peso;
        private $altura;

        public function setPeso($value){
            $this->peso = $value;
        }
        public function getPeso(){
            return $this->peso;
        }
        public function setAltura($value){
            $this->altura = $value;
        }
        public function getAltura(){
            return $this->altura;
        }
        public function Calculo(){
           $this->peso = $this->peso*10000;
           $imc = $this->peso/$this->altura**2; 
           if($imc < 20){
               echo "abaixo do peso";
           }elseif($imc >=20 && $imc <=50){
               echo "peso normal";
           }elseif($imc >= 25 && $imc <=30){
                echo "sobre peso";
           }elseif($imc >= 40){
               echo "obeso morbito";
           }
        }


    }

?>