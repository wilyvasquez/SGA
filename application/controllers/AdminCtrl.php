<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminCtrl extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('html2pdf');
	}

	public function index()
	{
		$this->load->view("loginView");
	}

	public function login()
	{
		$this->load->view("loginView");
	}

	public function addChofer()
	{
		$data["footer"] = $this->load->view("template/footer",null,true);
		$data["menu"]   = $this->load->view("template/menu",null,true);
		$this->load->view("chofer/choferView",$data);
	}

	public function app()
	{
		$data["footer"] = $this->load->view("template/footer",null,true);
		$data["menu"]   = $this->load->view("template/menu",null,true);
		$this->load->view("app/corridasView",$data);
	}

	public function transporte()
	{
		$data["footer"]       = $this->load->view("template/footer",null,true);
		$data["menu"]         = $this->load->view("template/menu",null,true);
		$data["messages"]     = $this->load->view("template/messages",null,true);
		$data["notification"] = $this->load->view("template/notification",null,true);
		$data["tasks"]        = $this->load->view("template/tasks",null,true);
		$data["logout"]       = $this->load->view("template/logout",null,true);
		$data["perfil"]       = $this->load->view("template/perfil",$data,true);
		$this->load->view("app/transporteView",$data);
	}

	public function usuarios()
	{
		$data["footer"] = $this->load->view("template/footer",null,true);
		$data["menu"]   = $this->load->view("template/menu",null,true);
		$this->load->view("app/usuariosView",$data);
	}

	public function estaciones()
	{
		$data["footer"] = $this->load->view("template/footer",null,true);
		$data["menu"]   = $this->load->view("template/menu",null,true);
		$this->load->view("app/estacionesView",$data);
	}

	public function conexion()
	{
		$data["footer"] = $this->load->view("template/footer",null,true);
		$data["menu"]   = $this->load->view("template/menu",null,true);
		$this->load->view("app/conexion",$data);
	}

	public function dompdf()
    {    
        //establecemos la carpeta en la que queremos guardar los pdfs,
        //si no existen las creamos y damos permisos
        $this->createFolder();
        //importante el slash del final o no funcionará correctamente
        $this->html2pdf->folder('./files/pdfs/');
        //establecemos el nombre del archivo
        $this->html2pdf->filename('test.pdf');
        //establecemos el tipo de papel
        $this->html2pdf->paper('a4', 'portrait');
        //hacemos que coja la vista como datos a imprimir
        //importante utf8_decode para mostrar bien las tildes, ñ y demás
        $this->html2pdf->html((
        	$this->load->view('app/mypdf',null, true)
        	));
        //si el pdf se guarda correctamente lo mostramos en pantalla
        if($this->html2pdf->create('save')) 
        {
            $this->show('test.pdf');
        }
    }

    private function createFolder()
    {
        if(!is_dir("./files"))
        {
            mkdir("./files", 0777);
            mkdir("./files/pdfs", 0777);
        }
    }
    public function show($nombre)
    {
        if(is_dir("./files/pdfs"))
        {
            $filename = $nombre; 
            $route = base_url("files/pdfs/".$nombre); 
            if(file_exists("./files/pdfs/".$filename))
            {
                header('Content-type: application/pdf'); 
                readfile($route);
            }
        }
    }

	public function notFound()
	{
		$data["footer"] = $this->load->view("template/footer",null,true);
		$data["menu"]   = $this->load->view("template/menu",null,true);
		$this->load->view("errors/view404",$data);
	}

	public function prueba()
	{
		$data["footer"] = $this->load->view("template/footer",null,true);
		$data["menu"]   = $this->load->view("template/menu",null,true);
		$this->load->view("app/prueba",$data);
	}

}
