<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 class Follow_Model extends CI_Model {
	
	function __construct()
    {
        parent::__construct();
    }
    
	public $follow_rules = array(
		'supervisor' => array(
			'field' => 'supervisor', 
			'label' => 'Supervisor Name', 
			'rules' => 'trim|required|xss_clean'
		), 
		'contributor[]' => array(
			'field' => 'contributor[]', 
			'label' => 'Contributor Name(s)', 
			'rules' => 'trim|required|xss_clean'
		), 
		'topic' => array(
			'field' => 'topic', 
			'label' => 'Follow Topic', 
			'rules' => 'trim|required|xss_clean'
		), 
		'date' => array(
			'field' => 'date', 
			'label' => 'Publish Date', 
			'rules' => 'trim|required|xss_clean'
		), 
		'abstract' => array(
			'field' => 'abstract', 
			'label' => 'Abstract', 
			'rules' => 'trim|required|xss_clean'
		) 
    );
    
	////////  CRUD/////////////
	public function get_follow($where = NULL, $single = FALSE, $user_join = NULL, $channel_join = NULL, $limit = NULL, $order = NULL)
	{
		if($where != NULL){
	            $this->db->where($where);
	        }
	        if($single == TRUE) {
			$method = 'row';
		}else {
			$method = 'result';
		}
        if($user_join != NULL){
            $this->db->join('users', 'follows.follower_id = users.'.$user_join);
        }
        if($channel_join != NULL){
            $this->db->join('channels', 'follows.followed_id = channels.'.$channel_join);
        }
		if($limit != NULL){
	            $this->db->limit($limit);
		}
		if($order != NULL){
			$this->db->order_by("follower_id", $order); 
		}
		return $this->db->get('follows')->$method();
	}
	
	public function add_follow($data)
	{
	    $this->db->set($data);
		$this->db->insert('follows');
		return $this->db->insert_id();
	}
    
	public function update_follow($data, $where)
	{
		$this->db->set($data);
		$this->db->where($where);
		$this->db->update('follows');
		return 'success';
	}
        
	public function delete($where, $single = TRUE){
    	$this->db->where($where);
        if($single == TRUE){
    	   $this->db->limit(1);
        }
    	$this->db->delete('follows');
	}
    
	public function get_new(){
		$follow = new stdClass();
		$follow->follow = '';
		$follow->topic = '';
		$follow->date = time();
		return $follow;
	}
 }