<?php 

	class Celular {
		private $db;
		private $celulares;
 
		public function __construct (){
			$this->db = Conectar::conection();
			$this->celulares = array();
		}

		public function all(){ 
			$sql = "SELECT * FROM celulares";
			$resulado = $this->db->query($sql);
			while ($values = $resulado->fetch(PDO::FETCH_ASSOC)){
				$this->celulares[] = $values;
			}
			return $this->celulares;
		}

		public function store (array $request){

 			$sql = "INSERT INTO celulares (marca, modelo, ram, os) VALUES
 			('".$request['marca']."', '".$request['modelo']."', '".$request['ram']."', '".$request['os']."')";

			$resulado = $this->db->query($sql);
		}

		public function find ($id){
			$sql = "SELECT * FROM celulares WHERE id = $id";
			
			$resulado = $this->db->query($sql);
			while ($values = $resulado->fetch(PDO::FETCH_ASSOC)){
				$this->celulares[] = $values;
			}
			return $this->celulares;	
		}

		public function update ($id, $request){
 			$sql = "UPDATE celulares SET marca = '".$request['marca']."', modelo='".$request['modelo']."', ram='".$request['ram']."', os='".$request['os']."' WHERE id = '".$id."'";

			$resulado = $this->db->query($sql);
		}

		public function destroy ($id){
			$sql = "DELETE FROM celulares WHERE id = $id";
			$resulado = $this->db->query($sql);	
		}

	}

 ?>