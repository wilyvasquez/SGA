<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginCtrl extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function login()
	{
		$this->load->view("loginView");
	}

	public function conexion()
	{
		$this->load->view("app/conexion");
	}

}