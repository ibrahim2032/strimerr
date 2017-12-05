<?php

class Channel extends General_Controller {

 
    protected $error = '';
    
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('users_model');
        $this->load->model('channel_model');
        $this->load->model('album_model');
        $this->load->model('account_model');
        $this->load->model('music_model');
        $this->load->model('follow_model');
    }
	
    
    
    private function get_album_musics($album_id)
    {
        return $this->music_model->get_music(array('album_id' => $album_id));
    }
    
    private function get_channel_albums_musics($channel_id)
    {
        $albums = $this->album_model->get_channel_albums($channel_id);
        foreach($albums as $album){
            $album->musics = $this->get_album_musics($album->album_id);
        }
        return $albums;
    }
    
    private function get_channel_musics($channel_id)
    {
        return $this->music_model->get_music(array('musics.channel_id' => $channel_id), false, 'album_id');
    }
    
    private function get_channel_followers($channel_id)
    {
        return $this->follow_model->get_follow(array('followed_id' => $channel_id), false, 'user_id');
    }
    
    private function get_follow_status($channel_id){
        $follow_status = $this->follow_model->get_follow(array('follower_id' => $this->session->userdata('user_id'), 'followed_id' => $channel_id), true);
        return ($follow_status)? 1 : 0;
    } 
    
    public function change_name(){
       	$rules = $this->channel_model->change_name_rules;
		$this->form_validation->set_rules($rules);
        if($this->form_validation->run() == TRUE){
            $input['name'] = $this->input->post('name');
            $data_set = $this->channel_model->update_channel($input, array('channel_id' => $this->session->userdata('channel')));
            echo 'success';
                
		}else{
          echo 'error';
          $this->session->set_flashdata('name_error', validation_errors());
		}

    }
    
    public function change_privacy(){
        $input['privacy'] = $this->input->post('privacy');
        $data_set = $this->channel_model->update_channel($input, array('channel_id' => $this->session->userdata('channel')));
        echo 'success';
    }
    
    private function get_header($channel_id)
    {
        $param['channel'] = $this->channel_model->get_channel(array('channel_id' => $channel_id), true);
        $param['music_count'] = count($this->get_channel_musics($channel_id));
        $param['stream_count'] = $this->music_model->get_music(array('channel_id' => $channel_id), false, Null, 'hit');
        $param['follower_count'] = count($this->get_channel_followers($channel_id));
        $param['follow'] = $this->get_follow_status($channel_id);
        return $param;
    }
    
    public function update_account()
    {
       	$rules = $this->account_model->account_rules;
		$this->form_validation->set_rules($rules);
        if($this->form_validation->run() == TRUE){
                $input['channel_id'] = $this->session->userdata('channel');
                $input['bank_name'] = $this->input->post('bank_name');
                $input['account_name'] = $this->input->post('account_name');
                $input['account_number'] = $this->input->post('account_number');
                $input['account_date'] = time();
            if($this->input->post('new')){
                $data_set = $this->account_model->update_account($input, array('channel_id' => $this->session->userdata('channel')));
            }else{
                $data_set = $this->account_model->add_account($input);
            } 
            echo 'success';
                
		}else{
          echo 'error';
          $this->session->set_flashdata('account_error', validation_errors());
		}
    }
    
////// Page Views //////        
    
    public function overview($channel_id = NULL)
    {  
        if($channel_id == NULL){
            $channel_id = $this->session->userdata('channel');
        }
        $param['header'] = $this->array_to_object($this->get_header($channel_id));
        $param['albums'] = $this->get_channel_albums_musics($channel_id);
        //echo '<pre>', print_r($param), '</pre';
        $this->load->view('pages/channel/overview', $param);
    }
    
    
    public function setting()
    {
        $param['header'] = $this->array_to_object($this->get_header($this->session->userdata('channel')));
        $param['musics'] = $this->get_channel_musics($this->session->userdata('channel'));
        $param['albums'] = $this->album_model->get_channel_albums($this->session->userdata('channel'));
        //echo '<pre>', print_r($param), '</pre';
        $this->load->view('pages/channel/setting', $param);
    }
    
    
    public function monetize()
    {   
        $param['header'] = $this->array_to_object($this->get_header($this->session->userdata('channel')));
        $account = $this->account_model->get_account(array('channel_id' => $this->session->userdata('channel')), true);
        $param['account'] = ($account)? $account : $this->account_model->get_new();
        //echo '<pre>', print_r($param), '</pre';
        $this->load->view('pages/channel/monetize', $param);
    }
    
    
    public function campaign()
    {
        $param['header'] = $this->array_to_object($this->get_header($this->session->userdata('channel')));
        $this->load->view('pages/channel/campaign', $param);
    }
    
    
    public function analysis()
    {
        $param['header'] = $this->array_to_object($this->get_header($this->session->userdata('channel')));
        $this->load->view('pages/channel/analysis', $param);
    }
    

    public function follower()
    {
        $param['header'] = $this->array_to_object($this->get_header($this->session->userdata('channel')));
        $param['followers'] = $this->get_channel_followers($this->session->userdata('channel'));
        //echo '<pre>', print_r($param), '</pre';
        $this->load->view('pages/channel/followers', $param);
    }
//// End Page Views /////

}
