<?php


class Login extends CI_Controller {

	public function index()
	{
		if(!$this->input->post('username')){
			$this->load->view('template/header');
			$this->load->view('login');

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
					'username'  => $username,
					'logueado' => true
					);

					$this->session->set_userdata($sesion);

				$this->load->view('template/header');	
				echo "Login.... Exitoso <br>";
				echo $this->session->username;
			}
			else{
				$this->load->view('template/header');
				echo "FAil... Contraseña Incorrecta ";
			}

		}
		else{
			$this->load->view('template/header');
			echo "NO existe ese usuario";
		}
		
	}
}