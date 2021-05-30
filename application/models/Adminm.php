<?php 
	class Adminm extends CI_Model {
		public function __construct() {
			parent::__construct();
			$this->load->database();
		}

		//SELECT PRODUK AWAL
		public function getProductawal() {
			$sql="SELECT * FROM produk";
			
			$query=$this->db->query($sql);
			return $query->result_array();
		}

		public function getProductHome() {
			$sql="SELECT * FROM produk limit 6";
			$query=$this->db->query($sql);
			return $query->result_array();
		}

		//JOIN TABLE USER
		public function getUserTable(){
			$sql="SELECT * FROM user INNER JOIN admin_value_db ON user.level = admin_value_db.level";
			$query=$this->db->query($sql);
			return $query->result_array();
		}

		//SELECT PRODUK AWAL
		public function getkategori() {
			$sql="SELECT * FROM kategori_tbl";

			$query=$this->db->query($sql);
			return $query->result_array();
		}



		public function getUser() {
			$sql="SELECT * FROM user";
		
			$query=$this->db->query($sql);
			return $query->result_array();
		}

		public function getHeader() {
			$sql="SELECT * FROM header_tbl";
		
			$query=$this->db->query($sql);
			return $query->result_array();
		}


		public function getHeaderId($id) {
			$sql="SELECT * FROM header_tbl WHERE id='$id'";
		
			$query=$this->db->query($sql);
			return $query->row();
		}

		public function getUserId($user_id) {
			$sql="SELECT * FROM user WHERE user_id = '$user_id'";
		
			$query=$this->db->query($sql);
			return $query->row();
		}

		



		//SELECT PRODUK AWAL
		public function getProductawaldetail($id) {
			$sql="SELECT * FROM produk where id='$id'";
			$query=$this->db->query($sql);
			return $query->row();
		}

		//SELECT PRODUK AWAL
		public function getKategoridetail($id) {
			$sql="SELECT * FROM kategori_tbl where id='$id'";
			$query=$this->db->query($sql);
			return $query->row();
		}

		//Select Admin role
		public function getdataAdminRole(){
			$sql="SELECT * FROM admin_value_db";
		
			$query=$this->db->query($sql);
			return $query->result_array();
		}
		
		public function getCorder(){
            $sql="SELECT * FROM cara_order";
            $query=$this->db->query($sql);
            return $query->result_array();
        }

        public function getCorderId($id){
            $sql="SELECT * FROM cara_order WHERE id='$id'";
            $query=$this->db->query($sql);
            return $query->row();
        }



		
	}