<?php

    class Garrafas{
        private $Latas350ml;
        private $Garrafas600ml;
        private $Garrafas2l;

        public function setLatas350ml($value){
            $this->Latas350ml = $value;
        }
        public function getLatas350ml(){
            return $this->Latas350ml;
        }
        public function setGarrafas600ml($value){
            $this->Garrafas600ml = $value;
        }
        public function getGarrafas600ml(){
            return $this->Garrafas600ml;
        }
        public function setGarrafas2l($value){
            $this->Garrafas2l = $value;
        }
        public function getGarrafas2l(){
            return $this->Garrafas2l;
        }
        public function Calculo(){
            $lata = $this->Latas350ml*0.35;
            $garrafa = $this->Garrafas600ml*0.60;
            $garrafa2 = $this->Garrafas2l*2;
            $total = $lata+$garrafa+$garrafa2;
            return $total;
        }
    }

?>