<?php
 

 
    function uploadfile($file,$uploadpath,$imgname)
    {
        $CI =& get_instance();
        if (!empty($file['name'])) {
            $new_image_name = time() . str_replace(
                str_split(' ()\\/,:*?"<>|'),'', $file['name']
            ); 
        }
        if (!file_exists($uploadpath)) {
                mkdir($uploadpath,0777, true);
            }
            $fullpath  = $uploadpath.'thumb';
        if (!file_exists($fullpath)) {
                mkdir($fullpath,0777, true);
                chmod($fullpath,0775);

            }

            $config = array();
            $config['upload_path']   = $uploadpath;
            $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
            $config['file_name'] = $new_image_name;
            $config['max_size']  = '0'; 
            $CI->load->library('upload', $config); 
            if ($CI->upload->do_upload($imgname)) {
                return $new_image_name;
            } else {
                echo $CI->upload->display_errors();
                exit;
            } 
    }

   function uploadMultipalFile($file,$uploadpath)
        {
            $CI =& get_instance();

            $count = count($file['name']);
            if (!file_exists($uploadpath)) {
                mkdir($uploadpath,0777, true);
            }
         
            for ($i = 0; $i < $count; $i++) { 
                if (!empty($file['name'][$i])) {  
                    $_FILES['file']['name'] = $file['name'][$i];
                    $_FILES['file']['type'] = $file['type'][$i];
                    $_FILES['file']['tmp_name'] = $file['tmp_name'][$i];
                    $_FILES['file']['error'] = $file['error'][$i];
                    $_FILES['file']['size'] = $file['size'][$i];

                    $config['upload_path'] = $uploadpath;
                    $config['allowed_types'] = 'jpg|jpeg|png|gif';
                    $config['file_name'] = str_replace( str_split(' ()\\/,:*?"<>|'),'', $file['name'][$i]
                    );

                    $CI->load->library('upload', $config);

                    if ($CI->upload->do_upload('file')) {
                        $uploadData = $CI->upload->data();
                        $filename[] = $uploadpath.$uploadData['file_name']; 
                    } else {
                        echo $CI->upload->display_errors();
                    }
                }
            }
            return $filename;
            
        }
 
    function savethumb($fileName, $path, $width, $height) 
    {
        $CI =& get_instance();

        $CI->load->library('image_lib');
        $config['image_library']  = 'gd2';
        $config['source_image']   = $path.$fileName;       
        $config['create_thumb']   = TRUE;
        $config['maintain_ratio'] = TRUE; 
        $config['width']          = $width;
        $config['height']         = $height;
        $config['new_image']      = $path.'thumb/'.$fileName;   
        $CI->image_lib->initialize($config);
        clearstatcache();
        if (! $CI->image_lib->resize()) { 
            echo $CI->image_lib->display_errors();
        }        
        else{
            $data = $CI->upload->data();
            return $data['raw_name'].'_thumb'.$data['file_ext'];;
        }
    }
 