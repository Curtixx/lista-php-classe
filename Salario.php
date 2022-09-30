<?php

    class Salario{
        private $Salario;
        private $QtdHoras;
        private $ValoHoraExtra;

        public function setSalarioBruto($value){
            $this->Salario = $value;
        }
        public function getSalarioBruto(){
            return $this->Salario;
        }
        public function setQtdHoras($value){
            $this->QtdHoras = $value;
        }
        public function getQtdHoras(){
            return $this->QtdHoras;
        }
        public function setValorHoraExtra($value){
            $this->ValoHoraExtra = $value;
        }
        public function getValorHoraExtra(){
            return $this->ValoHoraExtra;
        }
        public function Calculo(){
            $extra = $this->QtdHoras+$this->ValoHoraExtra;
            $novo_salario = $this->Salario+$extra;
            $inss = $novo_salario*0.08;
            $salario_final = $novo_salario-$inss;
            echo "o salario liquido e de: $salario_final";

        }

    }


?>