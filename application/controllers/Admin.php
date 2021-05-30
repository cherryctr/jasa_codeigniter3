<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
			parent::__construct();
			$this->load->model("Adminm");
			$this->load->library('form_validation');

			
		}
	
	
	public function index()
	{
		// $data['productdata']=$this->Productm->getProductawal();
		// $data['slider']=$this->Productm->getSlider();
		// $data['kategori']=$this->Productm->getkategori();
		// $data['productdata']=$this->Productm->getProductHome();
		$data['title']="Dashboard Admin";
		$data['angka']=$this->Adminm->getProductawal();
		$this->load->view('backend/header/header_admin',$data);
		$this->load->view('backend/admin_content/content',$data);
		$this->load->view('backend/footer/footer_admin');
	}

	//Layout Data kategori
	public function data_kategori()
	{
		$data['title']="Data Kategori";
		$data['kategori']=$this->Adminm->getkategori();
		$this->load->view('backend/header/header_admin',$data);
		$this->load->view('backend/admin_content/data_kategori',$data);
		$this->load->view('backend/footer/footer_admin',$data);
	}


	//Layout Editing Kategori
	public function UpdateKategori($id)
	{
		$data['title']='Update Produk';
		$data['detail']=$this->Adminm->getKategoridetail($id);
		$this->load->view('backend/header/header_admin',$data);
		$this->load->view('backend/admin_content/form_update_kategori',$data);
		$this->load->view('backend/footer/footer_admin',$data);
	}

	//Action Delete Kategori
	public function deleteKategori($id)
    {
        $sql="DELETE FROM kategori_tbl WHERE id='$id'";
        $query = $this->db->query($sql);
        // echo $sql;exit;
        $this->session->set_flashdata('delete','<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Selamat !!!</strong> Data berhasil di hapus
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>');
        redirect(base_url() . "Admin/data_kategori");
    }


    //Layout Tambah Kategori
	public function tambahKategori()
	{
		$data['title']='Tambah Produk';
		$data['kategori']=$this->Adminm->getkategori();
		$this->load->view('backend/header/header_admin',$data);
		$this->load->view('backend/admin_content/form_kategori',$data);
		$this->load->view('backend/footer/footer_admin',$data);
	}



	//Layout Produk
	public function Produk_data()
	{
		$data['title']='Data Produk';
		$data['adminproduk']=$this->Adminm->getProductawal();
		$this->load->view('backend/header/header_admin',$data);
		$this->load->view('backend/admin_content/data_produk',$data);
		$this->load->view('backend/footer/footer_admin',$data);
	}


	// Layout Tambah Produk
	public function tambahProduk()
	{
		$data['title']='Tambah Produk';
		$data['kategori']=$this->Adminm->getkategori();
		$this->load->view('backend/header/header_admin',$data);
		$this->load->view('backend/admin_content/from_tambah_produk',$data);
		$this->load->view('backend/footer/footer_admin',$data);
	}

	//Edit Layout Produk
	public function UpdateProduk($id)
	{
		$data['title']='Update Produk';
		$data['detail']=$this->Adminm->getProductawaldetail($id);
		$data['kategori']=$this->Adminm->getkategori();
		$this->load->view('backend/header/header_admin',$data);
		$this->load->view('backend/admin_content/form_edit_produk',$data);
		$this->load->view('backend/footer/footer_admin',$data);
	} 

	//Layout Edit User

	public function createUser(){
		if ($this->session->userdata('level') == 1) {
		$data['title']='Create User';
		//$data['detail']=$this->Adminm->getProductawaldetail($id);
		$data['dataadmin']=$this->Adminm->getdataAdminRole();
		$this->load->view('backend/header/header_admin',$data);
		$this->load->view('backend/admin_content/form_tambah_user',$data);
		$this->load->view('backend/footer/footer_admin',$data);
		}else{
			$data['title']='Gagal Dashboard';
			//$data['detail']=$this->Adminm->getProductawaldetail($id);
			//$data['dataadmin']=$this->Adminm->getdataAdminRole();
			$this->load->view('backend/header/header_admin',$data);
			$this->load->view('backend/admin_content/error_layout',$data);
			$this->load->view('backend/footer/footer_admin',$data);
		}
	}



	public function updateUser($user_id){
		if ($this->session->userdata('level') == 1) {
		$data['title']='Create User';
		$data['detail']=$this->Adminm->getUserId($user_id);
		$data['dataadmin']=$this->Adminm->getdataAdminRole();

			$this->form_validation->set_rules('current_password','Current Password','required|trim');
			$this->form_validation->set_rules('new_password1','New Password','required|trim|min_length[5]|matches[new_password2]');
			$this->form_validation->set_rules('new_password2','Confirm New Password','required|trim|min_length[5]|matches[new_password1]');


			if($this->form_validation->run() == false ){
			$this->load->view('backend/header/header_admin',$data);
			$this->load->view('backend/admin_content/form_edit_user',$data);
			$this->load->view('backend/footer/footer_admin',$data);
			}
		
		}else{
			$data['title']='Gagal Dashboard';
			//$data['detail']=$this->Adminm->getProductawaldetail($id);
			//$data['dataadmin']=$this->Adminm->getdataAdminRole();
			$this->load->view('backend/header/header_admin',$data);
			$this->load->view('backend/admin_content/error_layout',$data);
			$this->load->view('backend/footer/footer_admin',$data);
		}
	}

	
	//Data layout User
	public function UserData()
	{
		if ($this->session->userdata('level') == 1) {
		$data['title']='Data User';
		$data['datauser']=$this->Adminm->getUserTable();
		$this->load->view('backend/header/header_admin',$data);
		$this->load->view('backend/admin_content/data_user',$data);
		$this->load->view('backend/footer/footer_admin',$data);
		}else{
			$data['title']='Gagal Dashboard';
			//$data['detail']=$this->Adminm->getProductawaldetail($id);
			//$data['dataadmin']=$this->Adminm->getdataAdminRole();
			$this->load->view('backend/header/header_admin',$data);
			$this->load->view('backend/admin_content/error_layout',$data);
			$this->load->view('backend/footer/footer_admin',$data);
		}
	}

	public function headerData(){
		
		$data['title']='Create Layout';
		//$data['detail']=$this->Adminm->getProductawaldetail($id);
		$data['datalayout']=$this->Adminm->getHeader();
		$this->load->view('backend/header/header_admin',$data);
		$this->load->view('backend/admin_content/data_header',$data);
		$this->load->view('backend/footer/footer_admin',$data);
	}


	public function createHeader(){
		
		$data['title']='Create Header';
		//$data['detail']=$this->Adminm->getProductawaldetail($id);
		// $data['dataadmin']=$this->Adminm->getdataAdminRole();
		$this->load->view('backend/header/header_admin',$data);
		$this->load->view('backend/admin_content/form_tambah_header',$data);
		$this->load->view('backend/footer/footer_admin',$data);
	}

	public function UpdateHeader($id)
	{
		
		$data['title']='Update Header';
		$data['detail']=$this->Adminm->getHeaderId($id);
		//$data['kategori']=$this->Adminm->getkategori();
		$this->load->view('backend/header/header_admin',$data);
		$this->load->view('backend/admin_content/form_edit_header',$data);
		$this->load->view('backend/footer/footer_admin',$data);
		
	} 

	public function mapsData(){
		$data['title']='Maps Data Layout';
		//$data['detail']=$this->Adminm->getProductawaldetail($id);
		$data['datalayout']=$this->Adminm->getHeader();
		$this->load->view('backend/header/header_admin',$data);
		$this->load->view('backend/admin_content/maps_data',$data);
		$this->load->view('backend/footer/footer_admin',$data);	
	}
	
public function cara_order()
	{
		$data['title']='Data Order Layout';
		//$data['detail']=$this->Adminm->getProductawaldetail($id);
		$data['corder']=$this->Adminm->getCorder();
		$this->load->view('backend/header/header_admin',$data);
		$this->load->view('backend/admin_content/clayout',$data);
		$this->load->view('backend/footer/footer_admin',$data);	
	}

	public function addCara_order()
	{
		$data['title']='Data Order Layout';
		//$data['detail']=$this->Adminm->getProductawaldetail($id);
		$data['corder']=$this->Adminm->getCorder();
		$this->load->view('backend/header/header_admin',$data);
		$this->load->view('backend/admin_content/add_clayout',$data);
		$this->load->view('backend/footer/footer_admin',$data);	
	}


	public function editCara_order($id)
	{
		$data['title']='Data Order Layout';
		//$data['detail']=$this->Adminm->getProductawaldetail($id);
		$data['detail']=$this->Adminm->getCorderId($id);
		$this->load->view('backend/header/header_admin',$data);
		$this->load->view('backend/admin_content/edit_clayout',$data);
		$this->load->view('backend/footer/footer_admin',$data);	
	}


	
}
