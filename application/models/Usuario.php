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

        public function get_user_id($id)
        {
                return $this->db->get_where('usuarios',array('id_usuario' => $id ))->row_array();
        }

        public function save()
        {
                //Ejemplo
                //if ($this->db->query('SELECT `*` FROM `usuarios`')) {
                //        # code...
                //}

                
        	if (!$this->db->insert('usuarios', $this)) {
                        print($this->db->error());
                       
                };
        }

}