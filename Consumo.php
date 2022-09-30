<?php
    class Consumo{
        private $QtdQuilowatts;
        
        public function setQtdQuilowatts($value){
            $this->QtdQuilowatts = $value;
        }
        public function getQtdQuilowatts(){
            return $this->QtdQuilowatts;
        }
        public function Calculo(){
            $resp = $this->QtdQuilowatts*0.12;
            $resp_final = $resp*0.18;
            return $resp_final;
        }
    }
?>