<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->not_logged_in();
		$this->load->model('model_category');
 
		$this->data['page_title'] = 'Category';
	}

	public function list() {
		$user_id = $this->session->userdata('id');
		$is_admin = ($user_id == 1) ? true:false;
		$this->data['is_admin'] = $is_admin;
		$this->data['heading'] = " Category Listing";

		$this->data['data'] = $this->db->query("select * from categories")->result(); 

		$this->render_template('/backend/category/list', $this->data);
	}

	public function create()
	{
		$user_id = $this->session->userdata('id');
		$is_admin = ($user_id == 1) ? true : false;
		$this->data['is_admin'] = $is_admin;
		$this->data['heading'] = "Add Category";

		$this->data['parent'] = $this->db->query("select * from categories where status='Active'")->result();

		$this->render_template('/backend/category/create', $this->data);
	}
/*//
*
Save record
*/

	public function save()
	{
  		 
  	if( slugcheck($this->input->post('slug'))>0){
 
		$this->session->set_flashdata('error_message', 'Slug already exists!');
			redirect("admin/category/create");
	} 

 		$uploadpath = './assets/images/category/';
    	$width= generalSettings()['thumb_width'];
  		$height = generalSettings()['thumb_height']; 

  		//   IMAGE
		if (!empty($_FILES['category_images']['name'])) {
			 $productsimage =   uploadfile($_FILES['category_images'], $uploadpath,'category_images');  
 		 	$thumbproductsimage =savethumb($productsimage, $uploadpath, $width, $height) ; 
 		}  
		 
		// BANNER
		if (!empty($_FILES['category_banner']['name']) && count(array_filter($_FILES['category_banner']['name'])) > 0) {
			$bannername = uploadMultipalFile($_FILES['category_banner'],$uploadpath);  
			$bannerimage = implode('|',$bannername );
		}

		$tdate = date('Y-m-d');
		// insert in to db
		$catArr = array(
						'category_name'=>$this->input->post('category_name'),
						'slug'=>$this->input->post('slug'),
						'parent_id'=>$this->input->post('parent_id'),
						'short_description'=>$this->input->post('short_description'),
						'description'=>$this->input->post('description'),
						'meta_title'=>$this->input->post('meta_title'),
						'meta_keyword'=>$this->input->post('meta_keyword'),
						'meta_description'=>$this->input->post('meta_description'),
 						'category_images'=>$uploadpath.$productsimage, 
 						'thumb'=>$uploadpath.'thumb/'.$thumbproductsimage, 
						'category_banner'=>$bannerimage,
						'created_at'=>$tdate ,
			); 
		if($this->db->insert('categories', $catArr)){
		$InsertedCatid = $this->db->insert_id() ;

		$slagArr = array(
			'type'=>'categories',
			'slug'=>$this->input->post('slug'),
 			'page_id'=>$InsertedCatid ,
			'created_at'=>$tdate ,
		);

		$res = $this->db->insert('slug_tbl', $slagArr);
		if($res ){
			$this->session->set_flashdata('success_message', 'Category Added Successfully!');
			redirect("admin/category/create");
		}else{
			$this->session->set_flashdata('error_message', 'Slug not added');
			redirect("admin/category/create");
 		}
	}
	else{
		$this->session->set_flashdata('error_message', 'Something went wrong!');
			redirect("admin/category/create");
	}


	}
	public function edit($id) {

		$user_id = $this->session->userdata('id');
		$is_admin = ($user_id == 1) ? true:false;
		$this->data['is_admin'] = $is_admin;
		$this->data['heading'] = "Edit Category ";
		$this->data['parent'] = $this->db->query("select * from categories where  id!='$id' and status='Active'")->result();

		$this->data['res'] =  $this->db->get_where('categories', array('id' => $id))->result_array();
 
		$this->render_template('/backend/category/edit', $this->data);

		
	}

	public function update() {

		$uploadpath = './assets/images/category/';
 		$width= generalSettings()['thumb_width'];
  		$height = generalSettings()['thumb_height'];

 		$catid = $this->input->post('id');
 		$res =  $this->db->get_where('categories', array('id' => $catid))->result_array(); 

 		//images
		if (!empty($_FILES['category_images']['name'])) {

 			$catimage =   uploadfile($_FILES['category_images'], $uploadpath,'category_images');  
 		 	$thumbproductsimage = savethumb($catimage, $uploadpath, $width, $height) ;  

 		 	$productsimage  = $uploadpath.$catimage;
 		 	$thumbproductsimage  = $uploadpath.'thumb/'.$thumbproductsimage;
		}
		else{
			$productsimage = $res[0]['category_images'];
			$thumbproductsimage  = $res[0]['thumb'];
		}
		//multipal banner 
 		/* If files are selected to upload */
 
		if (!empty($_FILES['category_banner']['name']) && count(array_filter($_FILES['category_banner']['name'])) > 0) { 
			$bannername = uploadMultipalFile($_FILES['category_banner'],$uploadpath);    
			$bannerimage = implode('|',$bannername);
		}
		else{
			$bannerimage = $res[0]['category_banner'];
		}

					// insert in to db
		$catArr = array(
						'category_name'=>$this->input->post('category_name'),
						'slug'=>$this->input->post('slug'),
						'parent_id'=>$this->input->post('parent_id'),
						'short_description'=>$this->input->post('short_description'),
						'description'=>$this->input->post('description'),
						'meta_title'=>$this->input->post('meta_title'),
						'meta_keyword'=>$this->input->post('meta_keyword'),
						'meta_description'=>$this->input->post('meta_description'),
 						'category_images'=>$productsimage, 
 						'thumb'=>$thumbproductsimage, 
						'category_banner'=>$bannerimage,
 			); 

		$this->db->where('id', $catid); 
		$updatRes = $this->db->update('categories', $catArr);

		if($updatRes){
 
		$slagArr = array(
 			'slug'=>$this->input->post('slug'),
 		);

		$this->db->where('page_id', $catid); 
		$this->db->where('type', 'categories'); 

		$updatRess = $this->db->update('slug_tbl', $slagArr);

		if($updatRess ){
			$this->session->set_flashdata('success_message', 'Updated Successfully!');
			redirect("admin/category/list");
		}else{
			$this->session->set_flashdata('error_message', 'Slug not updated');
			redirect("admin/category/list");
 		}
	}
	else{
		$this->session->set_flashdata('error_message', 'Something went wrong!');
			redirect("admin/category/list");
	}


	}

	public function delete() {
		$id = $this->input->post('id');   
		$type = $this->input->post('ptype'); 
		if($type == 'categories'){  
		$chceck = $this->db->query("select * from categories where parent_id='$id'");
		if($chceck->num_rows()>0){
			echo "fail";
		}else{
		$delete = $this->model_category->deleteRecord($id);  
		if($delete){
			echo "success";
		}
	}
} else{
  	$this -> db -> where('id', $id); 
   	 $delete=$this -> db -> delete($type);

   	 if($delete){   
   		  
			echo "success";
 
		}
}
	}

	public function statuschange() {
		$id = $this->input->post('id');   
		$type = $this->input->post('type');   
		$tbl = $this->input->post('tbl');   

		if($type == 'Active'){
 			$statusArr = array(
 			'status'=>'Inactive',
 			);
		}
		else{
			$statusArr = array(
 			'status'=>'Active',
 			);
		} 

		$this->db->where('id', $id);  
		$updatRess = $this->db->update($tbl, $statusArr);
 		if($updatRess){
			echo "success";
		}
		else{
			echo "fail";
		}
	}

	public function chcekslug(){
		$parentid = $this->input->post('parentid');   
		$slug = $this->input->post('slug');   
		$type = $this->input->post('type');   

		if($parentid>0){
		$res = $this->db->query("select * from slug_tbl where  page_id='$parentid'  and type='categories'")->result(); 
		$oslug = $res[0]->slug.'/'.$slug;
			}else{
				$oslug = $slug;
			}
 
$cond = ($type =='edit')?'1':'0';
   	if( slugcheck($oslug)>$cond){
		echo "exist";
	}else{
		echo $oslug;
	}

	//chek in slug table
	}


}
