<?php


class Usuarios extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function registrar(){
		if (!isset($_POST['username'])) {	
			$this->load->view('template/header');
			$this->load->view('registrar');
			$this->load->view('template/footer');
			return;
		}

		/*
		class Myclass {
		public $title = 'My Title';
		public $content = 'My Content';
		public $date = 'My Date';
		}
		*/
		$user = new Usuario($_POST['username'],$_POST['password']);
		//$this->load->database('code');
		$user->save();
		// Produces: INSERT INTO mytable (title, content, date) VALUES ('My Title', 'My Content', 'My Date')



		$this->load->view('template/header');
			$this->load->view('exito');
			$this->load->view('template/footer');
			$this->load->view('login');

	}
	public function perfil()
	{
		$this->load->view('template/header');
		$this->load->view('perfil');
		$this->load->view('template/footer');
	}




}
