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
				echo "Login.... Exitoso";
			}
			else{
				echo "FAil... Contraseña Incorrecta ";
			}

		}
		else{
			echo "NO existe ese usuario";
		}
		
	}
}