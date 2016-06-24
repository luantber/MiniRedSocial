<?php 
class Usuario extends CI_Model {

		public $username;
		public $password;

        public function __construct($user="",$pass="")
        {
                parent::__construct();
                $this->username = $user;
                $this->password = $pass;

        }
        public function get_user($username)
        {
                return $this->db->get_where('usuarios',array('username' => $username ))->row_array();
        }

        public function save()
        {
        	$this->db->insert('usuarios', $this);
        }

}