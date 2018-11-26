<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminCtrl extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function usuarios()
	{
		$data["user"]      = "active";
		$data["title"]     = "Registros";
		$data["subtitle"]  = "Registros de usuarios";
		$data["contenido"] = "admin/usuario/usuarios";
		$data["menu"]      = "admin/menu_admin";
		$this->load->view('universal/plantilla',$data);
	}

	public function estaciones()
	{
		$data["estacion"]  = "active";
		$data["title"]     = "Registros";
		$data["subtitle"]  = "Registros de estaciones";
		$data["contenido"] = "admin/estaciones/estaciones";
		$data["menu"]      = "admin/menu_admin";
		$this->load->view('universal/plantilla',$data);
	}

	public function transporte()
	{
		$data["unidad"]  = "active";
		$data["title"]     = "Registros";
		$data["subtitle"]  = "Registros de estaciones";
		$data["contenido"] = "admin/transporte/transporte";
		$data["menu"]      = "admin/menu_admin";
		$this->load->view('universal/plantilla',$data);
	}

	public function choferes()
	{
		$data["choferes"]  = "active";
		$data["title"]     = "Registros";
		$data["subtitle"]  = "Registros de estaciones";
		$data["contenido"] = "admin/choferes/choferes";
		$data["menu"]      = "admin/menu_admin";
		$this->load->view('universal/plantilla',$data);
	}

	public function corridas()
	{
		$data["corridas"]  = "active";
		$data["title"]     = "Registros";
		$data["subtitle"]  = "Registros de estaciones";
		$data["contenido"] = "admin/corridas/corridas";
		$data["menu"]      = "admin/menu_admin";
		$this->load->view('universal/plantilla',$data);
	}

	public function perfil()
	{
		// $data["corridas"]  = "active";
		$data["title"]     = "Registros";
		$data["subtitle"]  = "Registros de estaciones";
		$data["contenido"] = "admin/usuarios/perfil";
		$data["menu"]      = "admin/menu_admin";
		$this->load->view('universal/plantilla',$data);
	}

	public function paqueteria()
	{
		$data["paquetes"]  = "active";
		$data["title"]     = "Registros";
		$data["subtitle"]  = "Registros de estaciones";
		$data["contenido"] = "admin/paqueteria/paqueteria";
		$data["menu"]      = "admin/menu_admin";
		$this->load->view('universal/plantilla',$data);
	}

}