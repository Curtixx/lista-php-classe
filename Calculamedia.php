<?php

    class Calcularmedia{
        private $Nota1;
        private $Nota2;
        private $Nota3;

        public function setNota1($value){
            $this->Nota1 = $value;
        }
        public function getNota1(){
            return $this->Nota1;
        }
        public function setNota2($value){
            $this->Nota2 = $value;
        }
        public function getNota2(){
            return $this->Nota2;
        }
        public function setNota3($value){
            $this->Nota3 = $value;
        }
        public function getNota3(){
            return $this->Nota3;
        }
        public function Calculo(){
            $total = ($this->Nota1+$this->Nota2+$this->Nota3)/3;
            if($total >=7.0){
                return "aprovado";
            }
            else{
                return "reprovado";
            }
        }
        
    }

?>