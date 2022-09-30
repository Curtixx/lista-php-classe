<?php
    class Combustivel{
        private $QtdQuilometros;
        private $QtdCombustivel;
        
        public function setQtdCombustivel($value){
            $this->QtdCombustivel=$value;
        }
        public function getQtdCombustivel(){
            return $this->QtdCombustivel;
        }
        public function setQtdQuilometros($value){
            $this->QtdQuilometros= $value;
        }
        public function getQtdQuilometro(){
            return $this->QtdQuilometros;
        }
        public function Calcularmedia(){
            $resp = $this->QtdQuilometros/$this->QtdCombustivel;
            return $resp;
        }
    }

?>