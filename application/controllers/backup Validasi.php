<?
public function updateUser($user_id){
		if ($this->session->userdata('level') == 1) {
		$data['title']='Upadate User';
		$data['detail']=$this->Adminm->getUserId($user_id);
		$data['dataadmin']=$this->Adminm->getdataAdminRole();

			//VALIDASI PASSWORD
			$this->form_validation->set_rules('current_password','Current Password','required|trim');
			$this->form_validation->set_rules('new_password1','New Password','required|trim|min_length[5]|matches[new_password2]');
			$this->form_validation->set_rules('new_password2','Confirm New Password','required|trim|min_length[5]|matches[new_password1]');


			if($this->form_validation->run() == false ){
			$this->load->view('backend/header/header_admin',$data);
			$this->load->view('backend/admin_content/form_edit_user',$data);
			$this->load->view('backend/footer/footer_admin',$data);
			}else{
				$current_password = $this->input->post('current_password');
				$new_password = $this->input->post('new_password1');
				$level = $this->input->post('level');
				$username = $this->input->post('username');

				if(!password_verify($current_password, $data['username']['password'])){
					$this->session->flashdata('message','<div class="alert alert-danger" role="alert">Wrong Curent Password</div>');
					redirect(site_url().'Admin/updateUser/'.$user_id);
				}else{
					if($current_password == $new_password1){
						$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
					            <strong>Oppss !!!</strong>Galatt Current Password 
					            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					              <span aria-hidden="true">&times;</span>
					            </button>
					          </div>');
				
					redirect(site_url().'Admin/updateUser/'.$user_id);
					}
					else{
						//password oke
						$password_hash = password_hash($new_password1, PASSWORD_DEFAULT);
						$level = $this->input->post('level');
						$username = $this->input->post('username');

						$this->db->set('username',$username);
						$this->db->set('level',$level);
						$this->db->set('password',$password_hash);
						$this->db->where('username',$this->session->userdata('username'));
						$this->db->update('user');

						$this->session->flashdata('message','<div class="alert alert-success" role="alert">Password Changed...! </div>');


					}
				}
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
