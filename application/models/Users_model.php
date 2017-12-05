<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 class Users_Model extends CI_Model {
	
	function __construct()
    {
        parent::__construct();
    }
    
	public $user_contact_rules = array(
        'phone' => array(
			'field' => 'phone', 
			'label' => 'Phone Number', 
			'rules' => 'trim|is_natural|max_length[20]|min_length[11]|xss_clean'
		),
		'city' => array(
			'field' => 'city', 
			'label' => 'City', 
			'rules' => 'trim|required|xss_clean'
		),
		'country' => array(
			'field' => 'country', 
			'label' => 'Country', 
			'rules' => 'trim|required|xss_clean'
		)
    );
     
    
	public $personal_rules = array(
		'name' => array(
			'field' => 'name', 
			'label' => 'Name', 
			'rules' => 'trim|required|xss_clean'
		),
        'stage_name' => array(
			'field' => 'stage_name', 
			'label' => 'A.K.A.', 
			'rules' => 'trim|xss_clean'
		),
        'birthday' => array(
			'field' => 'birthday', 
			'label' => 'Birthday', 
			'rules' => 'trim|xss_clean'
		),
        'origin' => array(
			'field' => 'orign', 
			'label' => 'Place of Origin', 
			'rules' => 'trim|xss_clean'
		)
    );
     
    
	public $career_set_rules = array(
		'genre' => array(
			'field' => 'genre', 
			'label' => 'Genre', 
			'rules' => 'trim|xss_clean'
		),
		'occupation' => array(
			'field' => 'occupation', 
			'label' => 'Occupation', 
			'rules' => 'trim|xss_clean'
		), 
		'instrument' => array(
			'field' => 'instrument', 
			'label' => 'Instrument', 
			'rules' => 'trim|xss_clean'
		), 
		'active_time' => array(
			'field' => 'active_time', 
			'label' => 'Active Time', 
			'rules' => 'trim|xss_clean'
		), 
		'company' => array(
			'field' => 'company', 
			'label' => 'Company', 
			'rules' => 'trim|xss_clean'
		)
    );
    
    
    
	////////USER  CRUD/////////////
	public function get_user($where = NULL, $single = FALSE)
	{
		if($where != NULL){
            $this->db->where($where);
        }
        if($single == TRUE) {
			$method = 'row';
		}
		else {
			$method = 'result';
		}
		
		return $this->db->get('users')->$method();
	}
	
	public function get_user_type($where = NULL)
	{
		if($where != NULL){
            $this->db->where($where);
        }
		return $this->db->get('user_types')->result();
	}
	
	public function add_user($data)
	{
	    $this->db->set($data);
		$this->db->insert('users');
		return $this->db->insert_id();
	}
    
	
	public function add_user_type($data)
	{
	    $this->db->set($data);
		$this->db->insert('user_types');
		return $this->db->insert_id();
	}
    
	
	public function update_user($data, $where)
	{
		$this->db->set($data);
		$this->db->where($where);
		$this->db->update('users');
		return 'success';
	}
    
	public function update_user_type($data, $where)
	{
		$this->db->set($data);
		$this->db->where($where);
		$this->db->update('user_types');
		return 'success';
	}
    
	public function delete($where, $single = TRUE){
    	$this->db->where($where);
        if($single == TRUE){
    	   $this->db->limit(1);
        }
    	$this->db->delete('users');
	}
    
	public function delete_type($where, $single = TRUE){
    	$this->db->where($where);
        if($single == TRUE){
    	   $this->db->limit(1);
        }
    	$this->db->delete('user_types');
	}
    
    public function loggedin(){
        if($this->session->userdata('login') && $this->session->userdata('login') == 1){
            return true;
        }else{
            return false;
        }
    }
    
	public function get_new(){
		$user = new stdClass();
		$user->name = '';
		$user->mat_no = '';
		$user->login = '';
		$user->password = '';
		$user->email = '';
		$user->phone = '';
		$user->user_type_id = '';
		return $user;
	} 
 }