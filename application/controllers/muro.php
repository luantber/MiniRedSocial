<?php

class Muro extends CI_Controller {

	public function index()	{

		$res = $this->post->get_all();
		$data = array('res' => $res );
		//$data = array_reverse($data);
		//print_r($data);
		$this->load->view('template/header');
		$this->load->view('muro',$data);

	}

	public function postear(){

			if (!$this->session->logueado) {
                        echo "Logueate primero papu .. ";
                        return;
            }
            $post = new Post($this->session->id,$this->input->post('texto'));
            $post->save();
            
			$this->load->view('template/header');

			redirect(base_url()."muro");
	}
}
