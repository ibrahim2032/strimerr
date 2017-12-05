<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 class Album_Model extends CI_Model {
	
	function __construct()
    {
        parent::__construct();
    }
    
	public $album_rules = array(
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
			'label' => 'Album Topic', 
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
	public function get_album($where = NULL, $single = FALSE, $music_join = NULL, $limit = NULL, $order = NULL)
	{
		if($where != NULL){
	            $this->db->where($where);
	        }
	        if($single == TRUE) {
			$method = 'row';
		}else {
			$method = 'result';
		}
        if($music_join != NULL){
            $this->db->join('musics', 'albums.album_id = musics.'.$music_join);
        }
		if($limit != NULL){
	            $this->db->limit($limit);
		}
		if($order != NULL){
			$this->db->order_by("album_id", $order); 
		}
		return $this->db->get('albums')->$method();
	}
	
	public function add_album($data)
	{
	    $this->db->set($data);
		$this->db->insert('albums');
		return $this->db->insert_id();
	}
    
	public function update_album($data, $where)
	{
		$this->db->set($data);
		$this->db->where($where);
		$this->db->update('albums');
		return 'success';
	}
        
	public function delete($where, $single = TRUE){
    	$this->db->where($where);
        if($single == TRUE){
    	   $this->db->limit(1);
        }
    	$this->db->delete('albums');
	}
    
    ////// !End CRUD ///////
    
    
    public function get_channel_albums($channel_id)
    {
        return $this->get_album(array('channel_id' => $channel_id));
    }
    
	public function get_new(){
		$album = new stdClass();
		$album->album = '';
		$album->topic = '';
		$album->date = time();
		return $album;
	}
 }