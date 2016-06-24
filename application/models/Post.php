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
        public function get_all()
        {
                //return $this->db->get('posts');

                $this->db->select('*');
                $this->db->from('posts');
                $this->db->join('usuarios', 'usuarios.id_usuario = posts.id_usuario');
                $this->db->order_by('id_post', 'DESC');
                return $this->db->get()->result_array();
        }

        public function save()
        {
        	
                $this->db->insert('posts', $this);
        }

}