<?php

class Muro extends CI_Controller {

	public function index()	{
		$this->load->view('template/header');
		$this->load->view('muro');

	}

	public function postear(){

			if (!$this->session->logueado) {
                        echo "Logueate primero papu .. ";
                        return;
            }
            $post = new Post($this->session->id,$this->input->post('texto'));
            $post->save();
            
			$this->load->view('template/header');

			echo "Posteado Correctamente";
	}
}
