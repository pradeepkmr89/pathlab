<?php

class Model_category extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

 public function deleteRecord($id) {

 	$res = $this->db->query("select * from categories where id ='$id'")->result();
 	$image_path ='./'; // your image path
 
    $categpry_images = $image_path . $res[0]->categpry_images; 
  	$categpry_banners =  $res[0]->category_banner; 
	$categpry_banner = explode('|',$categpry_banners); 
 
  	$this -> db -> where('id', $id);
   	 $del=$this -> db -> delete('categories');

   	 if($del){   

	if ( is_file( $categpry_images ) ) {
  // chmod ( './' . $getdaata[0]->images , 777 );
  	$resdelete =  unlink ( $categpry_images); 
	} 
         foreach($categpry_banner as $val){
	        	$categpryban = $image_path . $val; 
	         
	        	if ( is_file( $categpryban ) ) {
					  // chmod ( './' . $getdaata[0]->images , 777 );
					  	$resdelete =  unlink ($categpryban); 
						} 
	        } 
   
   		 //DLETE SLUG AND IMAGE 
   		 $cond = array('page_id' => $id, 'type' => 'categories');
   		 $this -> db -> where($cond);
   		 $dle = $this -> db -> delete('slug_tbl'); 

   		 return $dle;

   	 }
   	 return false;
 

}


}