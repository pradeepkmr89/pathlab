<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->not_logged_in(); 
 
		$this->data['page_title'] = 'Report';
	}

	public function index() {
		$this->data['heading'] = "Report"; 
		$this->data['data'] = $this->db->query("select * from test_group")->result();  
		$this->render_template('/backend/report/report', $this->data);
	}
	public function list() {

		$user_id = $this->session->userdata('id');
		$is_admin = ($user_id == 1) ? true:false;
		$this->data['is_admin'] = $is_admin;
		$this->data['heading'] = "Test Listing"; 
		$this->data['data'] = $this->db->query("select * from test_details")->result();  
		$this->render_template('/backend/test/list', $this->data);

	}
	
	public function create() {
		$user_id = $this->session->userdata('id');
		$is_admin = ($user_id == 1) ? true : false;
		$this->data['is_admin'] = $is_admin;
		$this->data['heading'] = "Add Test Name"; 
		$this->render_template('/backend/test/create', $this->data);
		}

	public function save() {   
 
			$_POST['created_at'] = date('Y-m-d');
 
		    $res = $this->db->insert('test_details',$_POST);  
		    if($res ){
			$this->session->set_flashdata('success_message', ' Added Successfully!');
			redirect("admin/test/create");
		}else{
			$this->session->set_flashdata('error_message', 'Something went wrong');
			redirect("admin/test/create");
 		}
		}
	public function edit($id) {
			
		$user_id = $this->session->userdata('id');
		$is_admin = ($user_id == 1) ? true:false;
		$this->data['is_admin'] = $is_admin;
		$this->data['heading'] = "Edit Test "; 
		$this->data['res'] =  $this->db->get_where('test_details', array('id' => $id))->result_array();
 
		$this->render_template('/backend/test/edit', $this->data);

		}
	public function update() {

		$id = $this->input->post('id');
 		$res =  $this->db->get_where('test_details', array('id' => $id))->result_array(); 
 
		$Arr = array(
						'title'=>$this->input->post('title'),
						'price'=>$this->input->post('price'),
  						'description'=>$this->input->post('description'), 
  			); 

		$this->db->where('id', $id); 
		$res = $this->db->update('test_details', $Arr);

		 if($res ){
			$this->session->set_flashdata('success_message', ' Added Successfully!');
			redirect("admin/test/list");
		}else{
			$this->session->set_flashdata('error_message', 'Something went wrong');
			redirect("admin/test/list");
 		}

 

			
		}
	public function delete() {
			
		}

	}
