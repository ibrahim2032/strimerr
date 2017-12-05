<?php

class Music extends General_Controller {

    
    
	function __construct()
	{
		parent::__construct();
        $this->load->model('general_model');
        $this->load->model('music_model');
        if (!$this->users_model->loggedin()){
            redirect(base_url(), 'refresh');
         }
    }
    
    public function add()
    {
        
        if($uploaded = $this->upload_music('uploads', 'userfile')){
            
			echo "FILES =".json_encode($uploaded)."<br><br>";
			echo "POST =".json_encode($_POST)."<br>";
		}else{
          echo 'error';
          $this->session->set_flashdata('add_music_error', 'invalid');
		}
    }  

}


