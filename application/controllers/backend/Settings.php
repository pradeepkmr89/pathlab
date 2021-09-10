<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->not_logged_in(); 
 
		$this->data['page_title'] = 'Setting';
	}

	public function list() {

		$user_id = $this->session->userdata('id');
		$is_admin = ($user_id == 1) ? true:false;
		$this->data['is_admin'] = $is_admin;
		$this->data['heading'] = "Setting Listing"; 
 		$this->render_template('/backend/setting/list', $this->data);

	}
	 
	public function save() {   

		$uploadpath = './assets/images/logo'; 
		$logo =companydetails()['logo'];
		$favicon =companydetails()['favicon'];

		if (!empty($_FILES['logo']['name'])) {  
 			 $image =  uploadfile($_FILES['logo'], $uploadpath,'logo');   
			 $logo = 'assets/images/logo/'. $image;
			}
			 if (!empty($_FILES['favicon']['name'])) {  
 			 $favicon =  uploadfile($_FILES['favicon'], $uploadpath,'favicon');   
			 $favicon = 'assets/images/logo/'. $favicon;
			} 

			 $compayArr = array(
			 	'company_name'=>$_POST['company_name'],
			 	'address'=>$_POST['address'],
			 	'mobile'=>$_POST['mobile'],
			 	'tel'=>$_POST['tel'],
			 	'email'=>$_POST['email'],
			 	'facebook'=>$_POST['facebook'],
			 	'twitter'=>$_POST['twitter'],
			 	'insta'=>$_POST['insta'],
			 	'linkedin'=>$_POST['linkedin'],
			 	'logo'=>$logo,
			 	'favicon'=>$favicon 
			);
			 $this->db->where('id', '1'); 
			$companyres = $this->db->update('company_details', $compayArr); 
			//General Setting

			 $settingArr = array(
			 	'thumb_width'=>$_POST['thumb_width'],
			 	'thumb_height'=>$_POST['thumb_height'],
			  
			);
			 $this->db->where('id', '1'); 
			$settingRes = $this->db->update('general_setting', $settingArr); 

		     if($companyres  && $settingRes){
			$this->session->set_flashdata('success_message', ' Added Successfully!');
			redirect("admin/setting/list");
		}else{
			$this->session->set_flashdata('error_message', 'Something went wrong');
			redirect("admin/setting/list");
 		}
		}

	
	public function change_password() {

		$old_password = $_POST['old_password'];
		$new_password = $_POST['new_password'];

		$result = $this->db->query("SELECT * FROM users WHERE id='1' and type='super'")->row_array();

		$hash_password = password_verify($old_password, $result['password']);
				if($hash_password === true) {

					$changeArr = array("password"=>password_hash($this->input->post('new_password'),PASSWORD_DEFAULT));

					 $this->db->where('id', '1'); 
					 $this->db->where('type', 'super'); 
					$settingRes = $this->db->update('users', $changeArr);  
					if($settingRes){
						$this->session->sess_destroy();
		
						echo "success";
redirect('backend/auth/login', 'refresh');
					}
				}
		 else{
		 	echo "notmatch";
		 }


		}
	 
	}
