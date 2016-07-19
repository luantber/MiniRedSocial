<?php

class Test extends CI_Controller {

	public function index()
	{
		echo "Metodo Por Default";
	}


	public function ruta1(){
		$this->load->view('test/test1');
	}

	
	public function ruta2($parametro){
		echo $parametro;
	}	

	public function ruta3(){
		$name = "Luis";

		$datos = array('name' => $name );

		$this->load->view('test/test2',$datos);	
	}
}
