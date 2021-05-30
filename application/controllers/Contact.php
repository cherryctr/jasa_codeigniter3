<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class contact extends CI_Controller {
	public function __construct() {
			parent::__construct();
			$this->load->database();
			$this->load->model("Productm");
	}



	public function index()
	{
		$data['title']="Contact - Jasa Design | Design Digital | Design Murah Cengkareng";
		// $this->load->library('googlemaps');
  //       $config=array();
  //       $config['center']="37.4419, -122.1419";
  //       $config['zoom']=17;
  //       $config['map_height']="400px";
  //       $this->googlemaps->initialize($config);
  //       $marker=array();
  //       $marker['position']="37.4419, -122.1419";
  //       $this->googlemaps->add_marker($marker);
  //       $data['map']=$this->googlemaps->create_map();
		$data['productdata']=$this->Productm->getProductHome();
		$data['header']=$this->Productm->getHeader();
		$this->load->view('frontend/header/header',$data);
		$this->load->view('frontend/content/contact_layout',$data);
		$this->load->view('frontend/footer/footer',$data);
	
	}
}
