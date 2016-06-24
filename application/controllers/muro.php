<?php


class Login extends CI_Controller {

	public function index()	{
		echo "THIS IS EL MUROOOOOO";
	}

	public function postear(){

			if (!$this->session->logueado) {
                        echo "Logueate primero papu .. ";
                        return;
            }
            $post = new Post($this->session->id,$this->input->post('text'));
            $post->save();
            
			this->load->view('template/header')
			echo "Posteado Correctamente";
	}

