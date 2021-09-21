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
	public function gettest() {
			
			$id = $this->input->post('grpid');
			$test = $this->db->query("select * from test_group where id='$id'")->result();

			$testarr = explode(',',$test[0]->test_id);
			foreach($testarr as $val){
 				$testRes = $this->db->query("select * from test_details where id='$val'")->result();
 				foreach($testRes as $vval){
 					$temp = array(
 						'id'=>$vval->id,
 						'title'=>$vval->title,
 						'normal'=>$vval->normal,
 						'unit'=>$vval->unit,

 				);
 				}
 				$data[]= $temp;
			}
			echo  json_encode($data);
		}

		public function save(){
		 //print_r($_POST);
			foreach($_POST['testname'] as $key=>$val){ 

 				 $collect[$key] = array( 
	 											 'name' => $val,
										        'id' => $_POST['testid'][$key],
										        'result' => $_POST['result'][$key]
										    );

			}
			$temp["data"]=$collect;
 			$jsondata =  json_encode($temp);

 			$data = array(
		        'pname' => $_POST['pname'],
		        'paddress' => $_POST['paddress'],
		        'page' => $_POST['page'],
		        'pgender' => $_POST['pgender'],
		        'doctername' => $_POST['doctername'],
		        'rdate' => $_POST['rdate'],
	 	        'json_data' => $jsondata
			);

			$this->db->insert('reports', $data);
			$insid = $this->db->insert_id();
			  redirect('/admin/reports/print/'.$insid,'refresh');
 		}
 		public function print($id){

 			$res = $this->db->query("select * from reports where id='$id'")->result();
  			$this->load->view('/backend/report/print_report',$res);
 		}

	}
