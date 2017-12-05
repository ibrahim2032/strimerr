<?php
class General_Controller extends CI_Controller
{

	function __construct ()
	{
		parent::__construct();
        	
        $this->load->model('users_model');


	}
    
    protected $param = array();
    
    public function upload_image($path){
		$config['upload_path'] = $path;
		$config['allowed_types'] = 'gif|jpg|png|JPEG|PNG|JPG|GIF';
		$config['max_size']	= '1000';
		$config['max_width']  = '1000';
		$config['max_height']  = '1000';

		$this->load->library('upload', $config);
                
	   if(!$this->upload->do_upload()){
			$result = array('error' => $this->upload->display_errors());
		}else{
			$result = array('success' => $this->upload->data());
		}
        return $result;
	}
    		
	    
    public function upload_music($path, $music){
		$config['upload_path'] = $path;
		$config['allowed_types'] = 'mp3|wav';
		$config['max_size']	= '16000';

		$this->load->library('upload', $config);
                
	   if(!$this->upload->do_upload($music)){
			$result = array('error' => $this->upload->display_errors());
		}else{
			$result = array('success' => $this->upload->data());
		}
        return $result;
	}
    
    
    public function array_to_object($array){
        $object = new stdClass();
       
        foreach($array as $key=>$value)
          {
            $object->$key = $value;
          }
 
        return $object;
    }

}