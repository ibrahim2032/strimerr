<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 class General_Model extends CI_Model {
	
	function __construct()
    {
        parent::__construct();
    }
    
	public function array_from_post($fields){
		$data = array();
		foreach ($fields as $field) {
			$data[$field] = $this->input->post($field);
		}
		return $data;
	}
 }