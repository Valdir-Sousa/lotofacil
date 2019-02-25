<?php 
	include("app/model/sorteio.php");

	Class ColunaA extends Sorteio{

		public function coluna1(){
			return rand(1,1);
		}

		public function coluna2($obj){
			$resp = true;	
			while($resp === true){
				$numero = rand(2,4);
				$resp 	= parent::sortear($obj,$numero);		
			}
			return $numero;
		}

		public function coluna3($obj){
			
			$resp = true;	
			while($resp === true){
				$numero = rand(3,5);
				$resp 	= parent::sortear($obj,$numero);		
			}
			return $numero;
		}

		public function coluna4($obj){
			
			$resp = true;	
			while($resp === true){
				$numero = rand(5,7);
				$resp 	= parent::sortear($obj,$numero);		
			}
			return $numero;
		}

		public function coluna5($obj){
			$resp = true;	
			while($resp === true){
				$numero = rand(6,9);
				$resp 	= parent::sortear($obj,$numero);		
			}
			return $numero;
		}

		public function coluna6($obj){
			
			$resp = true;	
			while($resp === true){
				$numero = rand(9,11);				
				$resp 	= parent::sortear($obj,$numero);
				
				}
			return $numero;
		}

		public function coluna7($obj){
			
			$resp = true;	
			while($resp === true){
				$numero =  rand(10,13);
				$resp 	= parent::sortear($obj,$numero);		
			}
			return $numero;
		}

		public function coluna8($obj){
			$resp = true;	
			while($resp === true){
				$numero = rand(12,14);
				$resp 	= parent::sortear($obj,$numero);		
			}
			return $numero;
		}

		public function coluna9($obj){
			
			$resp = true;	
			while($resp === true){
				$numero = rand(13,16);
				$resp 	= parent::sortear($obj,$numero);		
			}
			
			return $numero;
		}

		public function coluna10($obj){
			$resp = true;	
			while($resp === true){
				$numero = rand(15,18);
				$resp 	= parent::sortear($obj,$numero);		
			}
			return $numero;
		}

		public function coluna11($obj){
			
			$resp = true;	
			while($resp === true){
				$numero = rand(17,20);
				$resp 	= parent::sortear($obj,$numero);		
			}
			return $numero;
		}

		public function coluna12($obj){
			$resp = true;	
			while($resp === true){
				$numero = rand(18,21);
				$resp 	= parent::sortear($obj,$numero);		
			}
			return $numero;
		}

		public function coluna13($obj){
			$resp = true;	
			while($resp === true){
				$numero =  rand(20,23);
				$resp 	= parent::sortear($obj,$numero);		
			}
			return $numero;
		}

		public function coluna14($obj){
			$resp = true;	
			while($resp === true){
				$numero = rand(22,24);
				$resp 	= parent::sortear($obj,$numero);		
			}
			return $numero;
		}

		public function coluna15($obj){
			$resp = true;	
			while($resp === true){
				$numero = rand(24,25);
				$resp 	= parent::sortear($obj,$numero);		
			}
			return $numero;
		}
	}
?>
