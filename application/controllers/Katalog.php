<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Katalog extends CI_Controller {

	public function __construct() {
			parent::__construct();
			$this->load->model("Productm");
			$this->load->library('pagination');
			
		}
	
	
	public function index()
	{
		$data['title']="Katalog Produk";
		//$data['productdata']=$this->Productm->getProduct();
		$config=array();
		$config["base_url"]=base_url() .  "Katalog";
		$config["per_page"]=4;
		$config["uri_segment"]=2;
		$config["total_rows"]=$this->Productm->getProdukAllPags();
		//start tag ul
			    	$config['full_tag_open']   = '<ul class="pagination pagination-sm m-t-xs m-b-xs">';
			        $config['full_tag_close']  = '</ul>';
			        
			        $config['first_link']      = 'First'; 
			        $config['first_tag_open']  = '<li>';
			        $config['first_tag_close'] = '</li>';
			        
			        $config['last_link']       = 'Last'; 
			        $config['last_tag_open']   = '<li>';
			        $config['last_tag_close']  = '</li>';
			        
			        $config['next_link']       = ' <i class="glyphicon glyphicon-chevron-right"></i> '; 
			        $config['next_tag_open']   = '<li>';
			        $config['next_tag_close']  = '</li>';
			        
			        $config['prev_link']       = ' <i class="glyphicon glyphicon-chevron-left"></i> '; 
			        $config['prev_tag_open']   = '<li>';
			        $config['prev_tag_close']  = '</li>';
			        
			        $config['cur_tag_open']    = '<li class="active"><a href="#">';
			        $config['cur_tag_close']   = '</a></li>';
			         
			        $config['num_tag_open']    = '<li>';
			        $config['num_tag_close']   = '</li>';
			//end tag li
			$this->pagination->initialize($config);
			$start_data=($this->uri->segment(2)) ? $this->uri->segment(2):0;
			$data["productdata"]=$this->Productm->getProdukPags($start_data,$config["per_page"]);
		// $data['slider']=$this->Productm->getSlider();
		$data['kategori']=$this->Productm->getkategori();
		$data['header']=$this->Productm->getHeader();
		$this->load->view('frontend/header/header',$data);
		$this->load->view('frontend/content/produk_content',$data);
		$this->load->view('frontend/footer/footer',$data);
	}

// 	public function Kategori($slug_kategori)
// 	{
// 		$data['title']="Katalog Produk";
// 		$data['tampildata']=$this->Productm->getProdukKategori($slug_kategori);
// 		//$data['slider']=$this->Productm->getSlider();
// 		$data['kategori']=$this->Productm->getkategori();
// 		$data['header']=$this->Productm->getHeader();
// 		$this->load->view('frontend/header/header',$data);
// 		$this->load->view('frontend/content/kategori_content',$data);
// 		$this->load->view('frontend/footer/footer',$data);
// 	}

public function Kategori($slug_kategori)
	{
		$data['title']="Katalog Produk";
		//$data['productdata']=$this->Productm->getProduct();
		$q = $this->Productm->getPage($slug_kategori);

		//var_dump($q);exit;
		$config['base_url'] = base_url('/katalog/kategori/').$slug_kategori;
		$config['total_rows'] = $q;
		$config['per_page'] = 4;
		$config['full_tag_open']   = '<ul class="pagination pagination-sm m-t-xs m-b-xs">';
			        $config['full_tag_close']  = '</ul>';
			        
			        $config['first_link']      = 'First'; 
			        $config['first_tag_open']  = '<li>';
			        $config['first_tag_close'] = '</li>';
			        
			        $config['last_link']       = 'Last'; 
			        $config['last_tag_open']   = '<li>';
			        $config['last_tag_close']  = '</li>';
			        
			        $config['next_link']       = ' <i class="glyphicon glyphicon-chevron-right"></i> '; 
			        $config['next_tag_open']   = '<li>';
			        $config['next_tag_close']  = '</li>';
			        
			        $config['prev_link']       = ' <i class="glyphicon glyphicon-chevron-left"></i> '; 
			        $config['prev_tag_open']   = '<li>';
			        $config['prev_tag_close']  = '</li>';
			        
			        $config['cur_tag_open']    = '<li class="active"><a href="#">';
			        $config['cur_tag_close']   = '</a></li>';
			         
			        $config['num_tag_open']    = '<li>';
			        $config['num_tag_close']   = '</li>';
		$a = $this->uri->segment(4);
		$this->pagination->initialize($config);
		
		$data = array();
		$data['kategori']=$this->Productm->getkategori();
 		$data['header']=$this->Productm->getHeader();
		$data['tampildata'] = $this->Productm->getRowsProduct($slug_kategori, $config['per_page'],$a);
        
		$this->load->view('frontend/header/header',$data);
		$this->load->view('frontend/content/kategori_content',$data);
		$this->load->view('frontend/footer/footer',$data);
	}


	public function cara_order()
	{
		$data['title']="Katalog Produk";
		//$data['tampildata']=$this->Productm->getProdukKategori($slug_kategori);
		//$data['slider']=$this->Productm->getSlider();
		$data['kategori']=$this->Productm->getkategori();
		$data['header']=$this->Productm->getHeader();
		$data['corder']=$this->Productm->getCorder();
		$this->load->view('frontend/header/header',$data);
		$this->load->view('frontend/content/cara_order',$data);
		$this->load->view('frontend/footer/footer',$data);
	}


	public function detail($slug){
		$data['title']="Produk detail";
		$data['detail']=$this->Productm->getProductSlug($slug);
		// $data['slider']=$this->Productm->getSlider();
		// $data['kategori']=$this->Productm->getkategori();
		$data['kategori']=$this->Productm->getkategori();
		$data['header']=$this->Productm->getHeader();
		$data['produkall']=$this->Productm->getProductRand();
		$this->load->view('frontend/header/header',$data);
		$this->load->view('frontend/content/produk_detail',$data);
		$this->load->view('frontend/footer/footer',$data);
	}

	public function search(){
		$data['title']="Search Produk";
		$keyword = $this->input->post('keyword');
		$data['caridata']=$this->Productm->get_product_keyword($keyword);
		$data['header']=$this->Productm->getHeader();
		//echo $keyword;exit;
		$this->load->view('frontend/header/header',$data);
		$this->load->view('frontend/content/cari_layout',$data);
		$this->load->view('frontend/footer/footer',$data);
	}
	
}
