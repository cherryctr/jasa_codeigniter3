<?php 
	class Productm extends CI_Model {
		public function __construct() {
			parent::__construct();
			$this->load->database();
		}


		public function getProduct() {
			$sql="SELECT * FROM produk";
			$query=$this->db->query($sql);
			return $query->result_array();
		}

		public function getProductRand() {
			$sql="SELECT * FROM produk order by rand()";
			$query=$this->db->query($sql);
			return $query->result_array();
		}


		public function getProductSlug($slug) {
			$sql="SELECT * FROM produk WHERE slug='$slug' ";
			$query=$this->db->query($sql);
			return $query->row();
		}

		public function get_product_keyword($keyword){
			$this->db->select('*');
			$this->db->from('produk');
			$this->db->like('kategori',$keyword);
			//$this->db->or_like('deskripsi',$keyword);
			$this->db->or_like('title',$keyword);
			return $this->db->get()->result();
		}

		public function getHeader() {
			$sql="SELECT * FROM header_tbl";
		
			$query=$this->db->query($sql);
			return $query->result_array();
		}


		public function getkategori() {
			$sql="SELECT * FROM kategori_tbl";
		
			$query=$this->db->query($sql);
			return $query->result_array();
		}
		

		public function getProductHome() {
			$sql="SELECT * FROM produk limit 6";
			$query=$this->db->query($sql);
			return $query->result_array();
		}

		

		public function getProdukKategori($slug_kategori) {
			// if (isset($slug_kategori))	{
			// 	$sql="SELECT produk.*, kategori_tbl.slug_kategori FROM produk INNER JOIN kategori_tbl where produk.slug_kategori=kategori_tbl.slug_kategori and produk.slug_kategori=" . $slug_kategori;
			// }
			if($slug_kategori != null){
				$sql="SELECT * FROM `produk` WHERE slug_kategori = '$slug_kategori' order_by ASC";				
			//echo $sql; exit;
			}
			else{
					
				$sql="SELECT produk.*, kategori_tbl.slug_kategori FROM produk INNER JOIN kategori_tbl where produk.slug_kategori=kategori_tbl.slug_kategori order_by ASC";
					
					
			}

			//var_dump($sql); exit;
			$query=$this->db->query($sql);
			// var_dump($query->result_array()); exit;
			return $query->result_array();
		}


		public function getProdukAllPags()
			{
			$sql="SELECT * FROM produk order by title ASC";
			$query=$this->db->query($sql);
			return $query->num_rows();
			}
    	public function getProdukPags($start=0,$limit=0) {
				if($limit>0){
					$sql="SELECT * FROM produk order by title ASC LIMIT " . $start . "," . $limit;
					// echo $sql;
					// exit;
					$query=$this->db->query($sql);
					return $query->result_array();
				}
				else{ 
					return NULL;
				}

		 
			}
			
		function getPage($slug_kategori = ""){	
			//return $this->db->get('produk')->num_rows();
		$query = $this->db->get_where('produk', array('slug_kategori' => $slug_kategori ))->num_rows();
		return $query;
			//var_dump($query);exit;
		}


		function getRowsProduct($slug_kategori,$number,$offset){
			$this->table = 'produk';
			$this->db->select('*');
			$this->db->from('produk');
			$this->db->where('slug_kategori',$slug_kategori);
			$this->db->order_by('title','desc');
			$query = $this->db->get('',$number,$offset);
			$result = $query->result_array();
			return $result;

		}
		
		public function getCorder(){
			$sql="SELECT * FROM cara_order";
			$query=$this->db->query($sql);
			return $query->result_array();
		}


	}
