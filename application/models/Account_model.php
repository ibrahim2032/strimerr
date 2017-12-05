<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 class Account_Model extends CI_Model {
	
	function __construct()
    {
        parent::__construct();
    }
    
	public $account_rules = array(
		'bank_name' => array(
			'field' => 'bank_name', 
			'label' => 'Bank Name', 
			'rules' => 'trim|required|xss_clean'
		), 
		'account_name' => array(
			'field' => 'account_name', 
			'label' => 'Account Name', 
			'rules' => 'trim|required|xss_clean'
		), 
		'account_number' => array(
			'field' => 'account_number', 
			'label' => 'Account Number', 
			'rules' => 'trim|required|xss_clean'
		)
    );
    
	////////  CRUD/////////////
	public function get_account($where = NULL, $single = FALSE, $channel_join = NULL, $limit = NULL, $order = NULL)
	{
		if($where != NULL){
	            $this->db->where($where);
	        }
	        if($single == TRUE) {
			$method = 'row';
		}else {
			$method = 'result';
		}
        if($channel_join != NULL){
            $this->db->join('channels', 'accounts.account_id = channels.'.$channel_join);
        }
		if($limit != NULL){
	            $this->db->limit($limit);
		}
		if($order != NULL){
			$this->db->order_by("account_id", $order); 
		}
		return $this->db->get('accounts')->$method();
	}
	
	public function add_account($data)
	{
	    $this->db->set($data);
		$this->db->insert('accounts');
		return $this->db->insert_id();
	}
    
	public function update_account($data, $where)
	{
		$this->db->set($data);
		$this->db->where($where);
		$this->db->update('accounts');
		return 'success';
	}
        
	public function delete($where, $single = TRUE){
    	$this->db->where($where);
        if($single == TRUE){
    	   $this->db->limit(1);
        }
    	$this->db->delete('accounts');
	}
    
    ////// !End CRUD ///////
    
    
    public function get_channel_accounts($channel_id)
    {
        return $this->get_account(array('channel_id' => $channel_id));
    }
    
	public function get_new(){
		$account = new stdClass();
		$account->channel_id = '';
		$account->bank_name = '';
		$account->account_name = '';
		$account->account_number = '';
		$account->date = time();
		return $account;
	}
 }