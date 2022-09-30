<?php

    class Tempo{
        private $idade;

        public function setIdade($value){
            $this->idade=$value;
        }
        public function getIdade(){
            return $this->idade;
        }
        public function Calculo(){
            $dias =0;
            $minutos =0;
            $segundos =0;
            $dias = $this->idade*365;
            $minutos = $dias*24;
            $segundos = $minutos*60;
            return "você viveu $dias dias, $minutos minutos, $segundos segundos.";
        }


    }

?>