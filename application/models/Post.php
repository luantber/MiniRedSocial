<?php 
class Post extends CI_Model {

	public $texto;
        public $id_usuario;

        public function __construct($id_user="",$texto="")
        {
                parent::__construct();
                $this->id_usuario = $id_user;
                $this->texto = $texto;
        }

        public function get_post($id)
        {
                //return $this->db->get_where('posts',array('username' => $username ))->row_array();
        }

        public function save()
        {
        	
                $this->db->insert('posts', $this);
        }

}