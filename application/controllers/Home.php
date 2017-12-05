<?php 

/**
 * @author [Ibrahim Oshinubi]
 * @company [eTradesFair Solution]
 * @copyright 2015
 */


class Home extends General_Controller {

    
    function __construct()
    {
        parent::__construct();
        $this->load->model('users_model');
        $this->load->model('playlist_model');
        $this->load->database();
    }
	
    //Default function, redirects to logged in user area
    public function index()
    {  
		
        if (!$this->users_model->loggedin()){
    		$response['errors'] = array();
    		$response['register_errors'] = array();
			$this->load->view('pages/login', $response);
        }else{
            $header['user'] = $this->users_model->get_user(array('user_id' => $this->session->userdata('user_id')), True);
            $header['playlists'] = $this->playlist_model->get_playlist(array('user_id' => $this->session->userdata('user_id')));
			$this->load->view('layout/header', $header);
			$this->load->view('pages/home/explore');
			$this->load->view('layout/audioplayer');
			$this->load->view('layout/contentclose');
			$this->load->view('layout/sidebar');
			$this->load->view('layout/footer');
		}
    }
    
   
    
    public function explore()
    {
        $this->load->view('pages/home/explore');
    } 
    
   
    
    public function top()
    {
        $this->load->view('pages/home/top');
    } 
    
   
    
    public function newsongs()
    {
        $this->load->view('pages/home/new');
    }    
    
}
