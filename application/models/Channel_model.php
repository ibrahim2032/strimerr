<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 class Channel_Model extends CI_Model {
	
	function __construct()
    {
        parent::__construct();
    }
    
	public $change_name_rules = array(
		'name' => array(
			'field' => 'name', 
			'label' => 'Channel Name', 
			'rules' => 'trim|required|xss_clean'
		) 
    );
    
    
	////////  CRUD/////////////
	public function get_channel($where = NULL, $single = FALSE, $limit = NULL, $order = NULL)
	{
		if($where != NULL){
	            $this->db->where($where);
	        }
	        if($single == TRUE) {
			$method = 'row';
		}else {
			$method = 'result';
		}
		 if($limit != NULL){
	            $this->db->limit($limit);
	        }
	        if($order != NULL){
	            $this->db->order_by("channel_id", $order); 
	        }
		return $this->db->get('channels')->$method();
	}
	
	public function add_channel($data)
	{
	    $this->db->set($data);
		$this->db->insert('channels');
		return $this->db->insert_id();
	}
    
	public function update_channel($data, $where)
	{
		$this->db->set($data);
		$this->db->where($where);
		$this->db->update('channels');
		return 'success';
	}
        
	public function delete($where, $single = TRUE){
    	$this->db->where($where);
        if($single == TRUE){
    	   $this->db->limit(1);
        }
    	$this->db->delete('channels');
	}
    
	public function get_new(){
		$channel = new stdClass();
		$channel->channel = '';
		$channel->topic = '';
		$channel->date = time();
		return $channel;
	}
 }