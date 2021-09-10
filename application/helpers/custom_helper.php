<?php
  

    function slugcheck($slug) { 
    $CI =& get_instance();
            $query = $CI->db->query("select  slug from slug_tbl where slug='$slug'");
            return $query->num_rows(); 
}
 
 if ( ! function_exists('parentcat'))
 {
 function parentcat($pid){

    $CI =& get_instance();
    if($pid>0){
            $query = $CI->db->query("select  * from categories where id='$pid'")->result();
            return $query[0]->category_name; 
        }else{
            return '';
        }
 }
}


 if ( ! function_exists('getCompanyInfo'))
 {
 function getCompanyInfo(){

    $CI =& get_instance();
    $query = $CI->db->query("select  * from company_details where id='1'")->row_array();
    return $query; 
     
 }
}

 if ( ! function_exists('allCategory'))
 {
 function allCategory($param=''){ 
    $CI =& get_instance();
  return $CI->db->query("select  * from categories ".$param)->result(); 
 }
}

 if ( ! function_exists('generalSettings'))
 {
 function generalSettings($param=''){ 
    $CI =& get_instance();
     return  $CI->db->query("select  * from general_setting ".$param)->row_array(); 
 }
}

 if ( ! function_exists('getSlugContent'))
 {
 function getSlugContent($slug){ 
    $CI =& get_instance();
     return  $CI->db->query("select * from slug_tbl where slug = '$slug'")->row_array();
 }
}


 if ( ! function_exists('companydetails'))
 {
 function companydetails($param=''){ 
    $CI =& get_instance();
     return  $CI->db->query("select  * from company_details ".$param)->row_array(); 
 }
}

