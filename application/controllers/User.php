<?php

class User extends General_Controller {

    
    
	function __construct()
	{
		parent::__construct();
        $this->load->model('general_model');
        $this->load->model('users_model');
        $this->load->model('playlist_model');
        $this->load->model('playlist_music_model');
        $this->load->model('music_model');
        $this->load->model('follow_model');
        if (!$this->users_model->loggedin()){
            redirect(base_url(), 'refresh');
         }
    }
    
    public function change_contact()
    {
       	$rules = $this->users_model->user_contact_rules;
		$this->form_validation->set_rules($rules);
        if($this->form_validation->run() == TRUE){
            $input['phone'] = $this->input->post('phone');
            $input['city'] = $this->input->post('city');
            $input['country'] = $this->input->post('country');
            $data_set = $this->users_model->update_user($input, array('user_id' => $this->session->userdata('user_id')));
            echo 'success';
                
		}else{
          echo 'error';
          $this->session->set_flashdata('contact_error', validation_errors());
		}
    }
    
    public function change_personal()
    {
       	$rules = $this->users_model->personal_rules;
		$this->form_validation->set_rules($rules);
        if($this->form_validation->run() == TRUE){
            $input['name'] = $this->input->post('name');
            $input['stage_name'] = $this->input->post('stage_name');
            $input['gender'] = $this->input->post('gender');
            $input['birthday'] = $this->input->post('birthday');
            $input['origin'] = $this->input->post('origin');
            $data_set = $this->users_model->update_user($input, array('user_id' => $this->session->userdata('user_id')));
            echo 'success';
                
		}else{
          echo 'error';
          $this->session->set_flashdata('personal_error', validation_errors());
		}
    }
    
    
    public function career_set()
    {
       	$rules = $this->users_model->career_set_rules;
		$this->form_validation->set_rules($rules);
        if($this->form_validation->run() == TRUE){
            $input['genre'] = $this->input->post('genre');
            $input['occupation'] = $this->input->post('occupation');
            $input['instrument'] = $this->input->post('instrument');
            $input['active_time'] = $this->input->post('active_time');
            $input['company'] = $this->input->post('company');
            $data_set = $this->users_model->update_user($input, array('user_id' => $this->session->userdata('user_id')));
            echo 'success';
                
		}else{
          echo 'error';
          $this->session->set_flashdata('career_error', validation_errors());
		}
    }
    
    private function get_side($user_id){
        $param['user'] = $this->users_model->get_user(array('user_id' => $user_id), True);
        $param['playlist'] = $this->playlist_model->get_playlist(array('user_id' => $user_id));
        $param['following'] = $this->follow_model->get_follow(array('follower_id' => $user_id));
        return $param;
    }
  
    
   //Default function, redirects to logged in user area
    public function profile($user_id = NULL)
    {  
        if($user_id == NULL){
            $user_id = $this->session->userdata('user_id');
        }
        $param['user'] = $this->array_to_object($this->get_side($user_id));
        $this->load->view('pages/user/profile', $param);
    }
    
    public function setting()
    {
        $param['user'] = $this->array_to_object($this->get_side($this->session->userdata('user_id')));
        $this->load->view('pages/user/setting', $param);
    }
    
    public function following($user_id = NULL)
    {
        if($user_id == NULL){
            $user_id = $this->session->userdata('user_id');
        }
        $param['user'] = $this->array_to_object($this->get_side($user_id));
        $param['following'] = $this->follow_model->get_follow(array('follower_id' => $user_id), FALSE, null, 'channel_id');
        //echo '<pre>', print_r($param), '</pre';
        $this->load->view('pages/user/following', $param);
    }
    
    public function playlist($user_id = NULL)
    {
        if($user_id == NULL){
            $user_id = $this->session->userdata('user_id');
        }
        $param['user'] = $this->array_to_object($this->get_side($user_id));
        foreach($param['user']->playlist as $playlist){
            $playlist->musics = $this->playlist_music_model->get_playlist_music(array('playlist_id' => $playlist->playlist_id), false, 'music_id');
        }
        //echo '<pre>', print_r($param), '</pre';
        $this->load->view('pages/user/playlist', $param);
    }
    

}


