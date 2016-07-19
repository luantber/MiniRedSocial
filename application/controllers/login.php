<?php

class Login extends CI_Controller {

	public function index()
	{
		if(!$this->input->post('username')){
			$this->load->view('template/header');
			$this->load->view('login');
			$this->load->view('template/footer');
			return;
		}

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$data = $this->user->get_user($username);
		//print_r($data);
		if(isset($data)){
			
			if ($data['password'] == $password) {
				# code...
					$sesion = array(
					'id' => $data['id_usuario'],
					'username'  => $username,
					'logueado' => true
					);

					$this->session->set_userdata($sesion);

				//$this->load->view('template/header');	
				//echo "Login.... Exitoso <br>";
				//echo $this->session->id."    ".$this->session->username;
				 redirect(base_url()."muro");
			}
			else{
				$this->load->view('template/header');
				$this->load->view('incorrecto');
				$this->load->view('login');
				$this->load->view('template/footer');
			}

		}
		else{
			$this->load->view('template/header');
			$this->load->view('noexiste');
			$this->load->view('registrar');
			$this->load->view('template/footer');
		}
		
	}
}