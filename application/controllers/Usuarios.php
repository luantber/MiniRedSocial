<?php


class Usuarios extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function registrar(){
		if (!isset($_POST['username'])) {	
			$this->load->view('registrar');
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
		$this->db->insert('usuarios', $user);
		// Produces: INSERT INTO mytable (title, content, date) VALUES ('My Title', 'My Content', 'My Date')
		$this->load->view('');

	}
}
