<?php 
    Class Sorteio{

        public function sortear($obj,$var){
            $novaVar = true; 

            for($i=0;$i < count($obj->getNumeros());$i++){
                if($var > $obj->getNumeros()[$i]){                  
                    $novaVar = false;
                }
                 if($var == $obj->getNumeros()[$i]){
                    $novaVar = true;

                }
                if($var <= $obj->getNumeros()[$i]){
                    $novaVar = true;

                }
            }

            return $novaVar;
        }
    }
?>