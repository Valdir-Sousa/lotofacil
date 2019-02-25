<?php
	Class Jogo {
		private $numeros = array();
		
		public function setNumeros($numeros){
			$this->numeros[] = $numeros;
		}
		public function getNumeros(){
			return $this->numeros;
		}
	}
?>