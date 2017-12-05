<?php

class Album extends General_Controller {

    
    
	function __construct()
	{
		parent::__construct();
        $this->load->model('general_model');
        $this->load->model('users_model');
        $this->load->model('album_model');
        $this->load->model('channel_model');
        $this->load->model('music_model');
        if (!$this->users_model->loggedin()){
            redirect(base_url(), 'refresh');
         }
    }
    
    public function creat_album()
    {


    }
    

}


