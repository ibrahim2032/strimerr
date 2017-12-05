<?php

class Follow extends General_Controller {

    
    
	function __construct()
	{
		parent::__construct();
        $this->load->model('general_model');
        $this->load->model('users_model');
        $this->load->model('follow_model');
        $this->load->model('channel_model');
        $this->load->model('music_model');
        if (!$this->users_model->loggedin()){
            redirect(base_url(), 'refresh');
         }
    }
    
    public function follow($channel_id = NULL)
    {
		if($channel_id == NULL){
			$channel_id = $this->session->userdata('channel');
		}
        if($this->input->post('follow') == 1){
            $time = time();
            $this->follow_model->add_follow(array('follower_id' => $this->session->userdata('user_id'), 'followed_id' => $channel_id, 'follow_date' => $time));
        }else{
            $this->follow_model->delete(array('follower_id' => $this->session->userdata('user_id'), 'followed_id' => $channel_id));
        }
        echo 'success';

    }
    

}


