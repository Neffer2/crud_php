<?php 	
	class CelularesController 
	{	
		public function __construct (){
			require_once("Models/celular.php");
		}
		
		public function index()
		{	
			$celulares = new celular;
			$data['celulares'] = $celulares->all();
			require_once "Views/celulares/index.php";
		}

		public function store (){
			$celulares = new celular;
			$celulares->store($_POST);

			return $this->index();
		}

		public function edit ($id){
			$celulares = new celular;
			$data['celular'] = $celulares->find($id);

			require_once "Views/celulares/edit.php";
		}

		public function update ($id){
			$celulares = new celular;
			$celulares->update($id, $_POST);

			return $this->index();
		}

		public function destroy ($id){
			$celulares = new celular;
			$celulares->destroy($id);

			return $this->index();
		}
	}
 ?>
