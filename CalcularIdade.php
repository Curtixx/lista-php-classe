<?php

    class Calcularidade{
        private $idade;

        public function setIdade($value){
            $this->idade = $value;
        }
        public function getIdade(){
            return $this->idade;
        }
        public function Calculo(){
            if($this->idade >=5 && $this->idade <=7){
                return "Infantil A";
            }elseif($this->idade >=8 && $this->idade <=11){
                return "Infantil B";
            }elseif($this->idade >=12 && $this->idade <=13){
                return "Juenil A";
            }elseif($this->idade >= 14 && $this->idade <=17){
                return "Juvenil B";
            }elseif($this->idade >=18){
                return "Adulto";

            }

        }
    }

?>