<?php 

/**
 * @author [Ibrahim Oshinubi]
 * @company [eTradesFair Solution]
 * @copyright 2015
 */


class Login extends CI_Controller {

    
    function __construct()
    {
        parent::__construct();
        $this->load->model('users_model');
        $this->load->database();
        if ($this->users_model->loggedin()){
            redirect(base_url('home'), 'refresh');
         } 
    }
	
    //Default function, redirects to logged in user area
    public function index()
    {
        $response['errors'] = array();
        $response['register_errors'] = array();
        if(isset($_POST['submit']) && !empty($_POST['login'])){
    		$response['errors'] = array();
    		//Recieving post input of login, password from ajax request
    		$login 		= $this->input->post('login');
    		$password 	= $this->input->post('password');	
    		
    		//Validating login
    		$login_status = $this->validate_login( $login ,  $password );
    		$response['errors'] = $login_status;  
        }
        
        if ($this->session->userdata('login') == 1){
            redirect(base_url(), 'refresh');
         }   
		 $this->load->view('pages/login', $response);
        
    }
    
    //Validating login from ajax request
    private function validate_login($login , $password)
    {
		 $credential	=	array('email' => $login, 'password' => $password, 'confirmed' => '1');
 
		 // Checking login credential for admin
        $query = $this->db->get_where('users', $credential);
        if ($query->num_rows() > 0) {
            $row = $query->row();
			  $this->session->set_userdata('login', '1');
			  $this->session->set_userdata('user_id', $row->user_id);
			  $this->session->set_userdata('name', $row->name);
			  $this->session->set_userdata('email', $row->email);
			  $this->session->set_userdata('permission', $row->permission);
              
              $channel = $this->db->get_where('channels', array('user_id' => $row->user_id));
              $channel_row = $channel->row();
              $this->session->set_userdata('channel', $channel_row->channel_id);
			  return 'success';
		}
        		
		return 'Invalid Login Details';
    }
        
    
}
