<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banner extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->not_logged_in(); 
 
		$this->data['page_title'] = 'Banner';
	}

	public function list() {

		$user_id = $this->session->userdata('id');
		$is_admin = ($user_id == 1) ? true:false;
		$this->data['is_admin'] = $is_admin;
		$this->data['heading'] = "Banner Listing"; 
		$this->data['data'] = $this->db->query("select * from banner")->result();  
		$this->render_template('/backend/banner/list', $this->data);

	}
	
	public function create() {
		$user_id = $this->session->userdata('id');
		$is_admin = ($user_id == 1) ? true : false;
		$this->data['is_admin'] = $is_admin;
		$this->data['heading'] = "Add Banner"; 
		$this->render_template('/backend/banner/create', $this->data);
		}

	public function save() {   

		$uploadpath = './assets/images/banner/'; 
		if (!empty($_FILES['images']['name'])) {  
 			 $image =  uploadfile($_FILES['images'], $uploadpath,'images');   
			 $_POST['banner'] = 'assets/images/banner/'. $image;
			} 
			$_POST['created_at'] = date('Y-m-d');

			if($_POST['type'] =='0'){
				$_POST['link'] = $_POST['redcurl'] ;
			}else{
				$_POST['link'] = $_POST['redurl'] ;
			}
			unset($_POST['redcurl'] );
			unset($_POST['redurl'] );

		    $res = $this->db->insert('banner',$_POST);  
		    if($res ){
			$this->session->set_flashdata('success_message', ' Added Successfully!');
			redirect("admin/banner/create");
		}else{
			$this->session->set_flashdata('error_message', 'Something went wrong');
			redirect("admin/banner/create");
 		}
		}
	public function edit($id) {
			
		$user_id = $this->session->userdata('id');
		$is_admin = ($user_id == 1) ? true:false;
		$this->data['is_admin'] = $is_admin;
		$this->data['heading'] = "Edit Banner "; 
		$this->data['res'] =  $this->db->get_where('banner', array('id' => $id))->result_array();
 
		$this->render_template('/backend/banner/edit', $this->data);

		}
	public function update() {

		$id = $this->input->post('id');
 		$res =  $this->db->get_where('banner', array('id' => $id))->result_array(); 
 		$uploadpath = './assets/images/banner/'; 
 		
 		if (!empty($_FILES['images']['name'])) {  
			 $image =  uploadfile($_FILES['images'], $uploadpath,'images');   
			 $productsimage =    'assets/images/banner/'. $image;
		}
		else{
			$productsimage = $res[0]['banner'];
		}

			if($_POST['type'] =='0'){
				$_POST['link'] = $_POST['redcurl'] ;
			}else{
				$_POST['link'] = $_POST['redurl'] ;
			}
		$Arr = array(
						'name'=>$this->input->post('name'),
  						'description'=>$this->input->post('description'),
  						'link'=>$_POST['link'],
  						'type'=>$this->input->post('type'),
 						'banner'=>$productsimage,
 			); 

		$this->db->where('id', $id); 
		$res = $this->db->update('banner', $Arr);

		 if($res ){
			$this->session->set_flashdata('success_message', ' Added Successfully!');
			redirect("admin/banner/list");
		}else{
			$this->session->set_flashdata('error_message', 'Something went wrong');
			redirect("admin/banner/list");
 		}

 

			
		}
	public function delete() {
			
		}

	}
