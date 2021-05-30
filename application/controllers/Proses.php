<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proses extends CI_Controller {

	public function __construct() {
		parent::__construct();
        $this->load->model("Adminm");
        $this->load->model("Productm");
        $this->load->helper("slug");
        

		
	}

    //Action Tambah kategori
    public function TambahKategori ()
    {
        $data_produk = array('kategori'=>$this->input->post('kategori'),
                             'slug_kategori'=>strtolower(createSlug($this->input->post('kategori')))
        );
                                 
       // var_dump($data_produk); exit;
            
        $query = $this->db->insert('kategori_tbl',$data_produk);
        $this->session->set_flashdata('success','<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Selamat !!!</strong> Data berhasil di tambah
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
        
        redirect(base_url() . 'Admin/data_kategori/' );
        
            
    }

    //Action Edit Kategori
    public function editDataKategori($id) {
         
        $kategori = htmlentities($_POST["kategori"], ENT_QUOTES);
     
        $slug_kategori = htmlentities(strtolower(str_replace(" ", "-",$_POST["kategori"])), ENT_QUOTES);
        
       // $icon = htmlentities($_POST["icon"],ENT_QUOTES);

        
        $sql = "UPDATE kategori_tbl SET 
               kategori = '" . $kategori . "',
                slug_kategori= '" . $slug_kategori. "'
                
                 WHERE id = '" . $id . "'
               ";
               
        // echo $sql; exit;

        $query = $this->db->query($sql);
        $this->session->set_flashdata('delete','<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Selamat !!!</strong> Data berhasil di Edit
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>');
        
        redirect(base_url() . "Admin/data_kategori");
        
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


    //Action Tambah Produk 

    public function TambahProduk()
    {
        
            $config['upload_path']          = 'assets/images/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 0;
            $config['max_width']            = 0;
            $config['max_height']           = 0;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')){
                    $error = array('error' => $this->upload->display_errors());
                    print_r($error);
            }else{
                $_data = array('upload_data' => $this->upload->data());
                $data_produk = array('title'        =>$this->input->post('title'),
                 'slug'           =>createSlug($this->input->post('title')),
                                 'slug_kategori'             =>createSlug(strtolower($this->input->post('kategori'))),
                 'diskon'     =>$this->input->post('diskon'),
                 'harga'      =>$this->input->post('harga'),
                 'deskripsi'  =>$this->input->post('deskripsi'),
                                 'kategori'  =>$this->input->post('kategori'),
                 
                                 'gambar' => $this->input->post('gambar'), 
                                'gambar' => $_data['upload_data']['file_name']
                    );
                                 
         //var_dump($data_produk); exit;
            
                $query = $this->db->insert('produk',$data_produk);
                $this->session->set_flashdata('success','<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Selamat !!!</strong> Data berhasil di tambah
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>');
                
                redirect(base_url() . 'Admin/Produk_data/' );
            
        }
    }

    //Edit Produk Action
    public function editNewsSubmit($id) {
         
        $title = htmlentities($_POST["title"], ENT_QUOTES);
        $string=preg_replace('/[^a-zA-Z0-9 &%|{.}=,?!*()"-_+$@;<>]/','', $title); //filter karakter unik dan replace dengan kosong ('')
        $trim=trim($string); // hilangkan spasi berlebihan dengan fungsi trim
        $slug=strtolower(str_replace(" ", "-", $trim)); // hilangkan spasi, kemudian ganti spasi dengan tanda strip (-)
        
        $slug_kategori = htmlentities(strtolower(str_replace(" ", "-",$_POST["kategori"])), ENT_QUOTES);
        $gambar = $_POST["gambar_old"];
        $deskripsi =$_POST["deskripsi"];
        $harga= htmlentities($_POST["harga"],ENT_QUOTES);
        $diskon = htmlentities($_POST["diskon"],ENT_QUOTES);
        
        $kategori = htmlentities($_POST["kategori"],ENT_QUOTES);
        // $image_old = "././images/news/" . $_POST["image_old"];
        $gambar_old = "././assets/images/" . $_POST["gambar_old"];
        // echo $image_old; exit;

        $uploadconfig["upload_path"] = "./assets/images/";
        $uploadconfig["allowed_types"] = "gif|jpg|png";
        $uploadconfig["max_size"] = 1024;
        $this->load->library("upload", $uploadconfig);
        
        if ($this->upload->do_upload("gambar")) {
            $gambar = $this->upload->file_name;
            if (file_exists($gambar_old)) {
                unlink($gambar_old);
            }
        }
        
        $sql = "UPDATE produk SET 
               title = '" . $title . "',
                harga = '" . $harga . "',
                 diskon = '" . $diskon . "',
                kategori = '" . $kategori . "',
               deskripsi = '" . $deskripsi. "',
               slug_kategori = '" . $slug_kategori . "',
               slug = '" . $slug . "',
              gambar = '" . $gambar. "'
               WHERE id = '" . $id . "'
               ";
               
        // echo $sql; exit;

        $query = $this->db->query($sql);
        $this->session->set_flashdata('delete','<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Selamat !!!</strong> Data berhasil di Edit
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>');
        
        redirect(base_url() . "Admin/Produk_data");


        
    }



    //Delete Action 
    public function deleteProduk($id)
    {
        $sql="DELETE FROM produk WHERE id='$id'";
        $query = $this->db->query($sql);
        // echo $sql;exit;
        $this->session->set_flashdata('delete','<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Selamat !!!</strong> Data berhasil di hapus
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>');
        redirect(base_url() . "Admin/Produk_data");
    }

    //Tambah User
     public function Tambahuser ()
    {
        $data_produk = array('level'=>$this->input->post('level'),
                             'username'=>$this->input->post('username'),
                             'password'=>md5($this->input->post('password')),
        );
                                 
       //var_dump($data_produk); exit;
            
        $query = $this->db->insert('user',$data_produk);
        $this->session->set_flashdata('success','<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Selamat !!!</strong> Data berhasil di tambah
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
        
        redirect(base_url() . 'Admin/data_user/' );
        
            
    }

     public function editDataUser($user_id) {
         
        $level = htmlentities($_POST["level"], ENT_QUOTES);
        $username = htmlentities($_POST["username"], ENT_QUOTES);
        $password_old = htmlentities(md5($_POST["password_old"]), ENT_QUOTES);
     
       // $slug_kategori = htmlentities(strtolower(str_replace(" ", "-",$_POST["kategori"])), ENT_QUOTES);
        
       // $icon = htmlentities($_POST["icon"],ENT_QUOTES);

        
        $sql = "UPDATE user SET 
                level = '" . $level . "',
                username= '" . $username. "',
                password = '" .$password ."'

                
                 WHERE user_id = '" . $user_id . "'
               ";
               
        echo $sql; exit;

        $query = $this->db->query($sql);
        $this->session->set_flashdata('delete','<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Selamat !!!</strong> Data berhasil di Edit
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>');
        
        redirect(base_url() . "Admin/data_kategori");
        
    }


    public function TambahHeader()
    {
        
            $config['upload_path']          = 'assets/images/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 0;
            $config['max_width']            = 0;
            $config['max_height']           = 0;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')){
                    $error = array('error' => $this->upload->display_errors());
                    print_r($error);
            }else{
                $_data = array('upload_data' => $this->upload->data());
                $data_produk = array('title' =>$this->input->post('title'),
                                  'subject'=>$this->input->post('subject'),
                                
                                 'angka'  =>$this->input->post('angka'),
                 
                                 'gambar' => $this->input->post('gambar'), 
                                'gambar' => $_data['upload_data']['file_name']
                    );
                                 
               //var_dump($data_produk); exit;
            
                $query = $this->db->insert('header_tbl',$data_produk);
                $this->session->set_flashdata('success','<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Selamat !!!</strong> Data berhasil di tambah
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>');
                
                redirect(base_url() . 'Admin/headerData/' );
            
        }
    }

     public function editHeaderSubmit($id) {
         
        $title = htmlentities($_POST["title"], ENT_QUOTES);
        $subject = htmlentities($_POST["subject"], ENT_QUOTES);
     
        
        $gambar = $_POST["gambar_old"];
        
        // $image_old = "././images/news/" . $_POST["image_old"];
        $gambar_old = "././assets/images/" . $_POST["gambar_old"];
        // echo $image_old; exit;

        $uploadconfig["upload_path"] = "./assets/images/";
        $uploadconfig["allowed_types"] = "gif|jpg|png";
        $uploadconfig["max_size"] = 1024;
        $this->load->library("upload", $uploadconfig);
        
        if ($this->upload->do_upload("gambar")) {
            $gambar = $this->upload->file_name;
            if (file_exists($gambar_old)) {
                unlink($gambar_old);
            }
        }
        
        $sql = "UPDATE header_tbl SET 
               title = '" . $title . "',
               subject = '" . $subject . "',
              
              gambar = '" . $gambar. "'
               WHERE id = '" . $id . "'
               ";
               
        // echo $sql; exit;

        $query = $this->db->query($sql);
        $this->session->set_flashdata('delete','<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Selamat !!!</strong> Data berhasil di Edit
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>');
        
        redirect(base_url() . "Admin/headerData");


        
    }

    public function deleteHeader($id)
    {
        $sql="DELETE FROM header_tbl WHERE id='$id'";
        $query = $this->db->query($sql);
        // echo $sql;exit;
        $this->session->set_flashdata('delete','<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Selamat !!!</strong> Data berhasil di hapus
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>');
        redirect(base_url() . "Admin/headerData");
    }

    
public function updateDataCara($where){
      $id = $this->input->post('id');
      $title = $this->input->post('title');
     
      $deskripsi = $this->input->post('deskripsi');
     
      $data = array(
        
        'deskripsi' => $deskripsi,
         'title' => $title
      );
     //var_dump($data);exit;
      $where = array(
        'id' => $id
      );
     
      $query = $this->db->update('cara_order',$data,$where);
      redirect(base_url() . 'Admin/cara_order/' );
    }



    

}
