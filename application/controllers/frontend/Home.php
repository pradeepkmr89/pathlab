<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Admin_Controller {
 

	public function __construct()
	{
		parent::__construct();
 		$this->load->model('model_category');
		$this->load->helper('custom_helper');

		$this->data['meta_title'] = "";
		$this->data['meta_keyword'] = "";
		$this->data['meta_desc'] ="";
	}


	public function index()
	{
		$this->data['meta_title'] = "Home meta title";
 		$this->data['meta_desc'] = "Home meta description";

 		$this->render_view('frontend/index2',$this->data);
 	}

 	public function allpages(){ 
 		$slug = $this->uri->segment(1); 
 		 
 		 if(!empty( getSlugContent($slug))){
 		$tbleName = getSlugContent($slug)['type'];
  		$page_id = getSlugContent($slug)['page_id'];


		switch ($tbleName) {
		  case "cms_pages":
		    $views = $slug;
		    break;
		  case "categories":
		    $views = 'categories';
		    break; 
		  default:
		    $views = "404";
		}
		 
 		$slugQuery = $this->db->query("select * from ".$tbleName." where id = '$page_id' and slug='$slug'")->row_array();   

 		$this->data['data'] = $slugQuery ;
 		$this->data['meta_title'] = $slugQuery['meta_title'];
 		$this->data['meta_desc'] = $slugQuery['meta_description'];
 		$this->data['meta_keyword'] = $slugQuery['meta_keyword'];
 	}else{
 		$views = "404";
 		
		}

		$this->render_view('frontend/'.$views,$this->data);
 	}

 	public function sitemap(){

        $data = ""; 
        header("Content-Type: text/xml;charset=iso-8859-1");
        $this->load->view("frontend/sitemap",$data);
 	}

 	public function callbackenq(){
 		$res = $this->db->insert('getcallback_tbl',$_POST);
 		if($res){
 			echo "success";
 			}
 			else{
 				echo "fail";
 			}
 	}

}
