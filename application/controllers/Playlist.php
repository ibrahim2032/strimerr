<?php

class Playlist extends General_Controller {

    
    
	function __construct()
	{
		parent::__construct();
        $this->load->model('general_model');
        $this->load->model('users_model');
        $this->load->model('playlist_model');
        $this->load->model('playlist_music_model');
        $this->load->model('music_model');
        if (!$this->users_model->loggedin()){
            redirect(base_url(), 'refresh');
         }
    }
    
    public function add()
    {
       	$rules = $this->playlist_model->add_playlist_rules;
		$this->form_validation->set_rules($rules);
        if($this->form_validation->run() == TRUE){
            $input['name'] = $this->input->post('name');
            $input['user_id'] = $this->session->userdata('user_id');
			$input['playlist_date'] = time();
            $data_set = $this->playlist_model->add_playlist($input);
            echo 'success';
                
		}else{
          echo 'error';
          $this->session->set_flashdata('playlist_error', validation_errors());
		}

    }
    

}


