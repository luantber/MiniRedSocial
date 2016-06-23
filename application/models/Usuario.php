<?php 
class Usuario extends CI_Model {

		public $username;
		private $password;

        public function __construct($user,$pass)
        {
                parent::__construct();

        }

