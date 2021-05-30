<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class error_page extends CI_Controller {
	public function __construct() {
			parent::__construct();
			$this->load->database();
			$this->load->model("Productm");
	}



	public function index()
	{
		$data['title']=" Jasa Design | Design Digital | Design Murah Cengkareng";
		$data['productdata']=$this->Productm->getProductHome();
		$data['header']=$this->Productm->getHeader();
		$this->load->view('frontend/header/header',$data);
		$this->load->view('frontend/content/error_layout',$data);
		$this->load->view('frontend/footer/footer',$data);
	
	}
}
