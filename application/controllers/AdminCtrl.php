<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminCtrl extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$data["user"]      = "active";
		$data["title"]     = "Registros";
		$data["subtitle"]  = "Registros de usuarios";
		$data["contenido"] = "admin/contenido";
		$data["menu"]      = "admin/menu_admin";
		$this->load->view('universal/plantilla',$data);
	}

	

}