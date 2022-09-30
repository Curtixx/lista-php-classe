<?php

    class Conversao{
        private $f = 40;
        private $c;

        public function Calculo(){
            for($this->f =40; $this->f <+70; $this->f++){
                $this->c = 5/9*($this->f-32);
                echo " a temperatura: ". $this->f. " convertida: ". $this->c ."<br>";

            }
           
                
        }
            
    }


?>