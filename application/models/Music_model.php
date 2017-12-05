<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 class Music_Model extends CI_Model {
	
	function __construct()
    {
        parent::__construct();
    }
    
	public $music_rules = array(
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
			'label' => 'Music Topic', 
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
	public function get_music($where = NULL, $single = FALSE, $album_join = NULL, $select_sum =NULL, $limit = NULL, $order = NULL)
	{
		if($where != NULL){
            $this->db->where($where);
        }
        if($single == TRUE) {
		  $method = 'row';
		}else {
			$method = 'result';
		}
        if($album_join != NULL){
            $this->db->join('albums', 'musics.album_id = albums.'.$album_join);
        }
		if($limit != NULL){
	        $this->db->limit($limit);
		}
		if($select_sum != NULL){
	        $this->db->select_sum($select_sum);
		}
		if($order != NULL){
			$this->db->order_by("music_id", $order); 
		}
		return $this->db->get('musics')->$method();
	}
	
	public function add_music($data)
	{
	    $this->db->set($data);
		$this->db->insert('musics');
		return $this->db->insert_id();
	}
    
	public function update_music($data, $where)
	{
		$this->db->set($data);
		$this->db->where($where);
		$this->db->update('musics');
		return 'success';
	}
        
	public function delete($where, $single = TRUE){
    	$this->db->where($where);
        if($single == TRUE){
    	   $this->db->limit(1);
        }
    	$this->db->delete('musics');
	}
    
	public function get_new(){
		$music = new stdClass();
		$music->music = '';
		$music->topic = '';
		$music->date = time();
		return $music;
	}
 }