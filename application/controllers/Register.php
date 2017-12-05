<?php 

/**
 * @author [Ibrahim Oshinubi]
 * @company [eTradesFair Solution]
 * @copyright 2015
 */


class Register extends CI_Controller {

    
    function __construct()
    {
        parent::__construct();
        $this->load->model('users_model');
        $this->load->model('general_model');
        $this->load->model('channel_model');
        $this->load->database(); 
    }
	
    //Default function, redirects to logged in user area
    public function index()
    {
        $param['register_errors'] = '';
        $param['errors'] = '';
               
        if($this->input->post()){
            /***** Fields Validation ******/
    		$rules = $this->users_model->add_user_rules;
    		$this->form_validation->set_rules($rules);
            /***** End Validation   ******/
            
            /***** End Validation   ******/
            $this->form_validation->set_message('is_unique', 'The %s is already in use');
          /***** Edit User ******/
    		if($this->form_validation->run() == TRUE){
                $fields = array('username', 'name', 'email', 'password');
                $input = $this->general_model->array_from_post($fields);
                $input['permission'] = '2';    
                $input['confirmed'] = '1';   
                $input['user_date'] = time();  
                $input['confirmation_code'] = md5($this->input->post('email'));                
                if(empty($param['register_errors'])){
                    $user_id = $this->users_model->add_user($input);
                    
                    $channel_input['channel'] = $this->input->post('username'); 
                    $channel_input['name'] = $this->input->post('name');     
                    $channel_input['user_id'] = $user_id;   
                    $channel_input['channel_date'] = time(); 
                    $channel_id = $this->channel_model->add_channel($channel_input);
                    
                    $this->session->set_flashdata('register_success', 'Registration successfully <br />  Welcome to Strimerr. Please login and have fun.');
                    redirect(base_url('login'));
                }    
    		}else{
    		  $param['register_errors'] .= validation_errors();
    		}
            /***** !Edit User ******/
        }
        
           
		 $this->load->view('pages/login', $param);
        
    } 
       
}
