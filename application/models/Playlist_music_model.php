<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 class Playlist_music_Model extends CI_Model {
	
	function __construct()
    {
        parent::__construct();
    }
    
	public $playlist_music_rules = array(
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
			'label' => 'Playlist_music Topic', 
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
	public function get_playlist_music($where = NULL, $single = FALSE, $music_join = NULL, $limit = NULL, $order = NULL)
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
            $this->db->join('musics', 'playlist_musics.playlist_music_id = musics.'.$music_join);
        }
		if($limit != NULL){
	            $this->db->limit($limit);
		}
		if($order != NULL){
			$this->db->order_by("playlist_music_id", $order); 
		}
		return $this->db->get('playlist_musics')->$method();
	}
	
	public function add_playlist_music($data)
	{
	    $this->db->set($data);
		$this->db->insert('playlist_musics');
		return $this->db->insert_id();
	}
    
	public function update_playlist_music($data, $where)
	{
		$this->db->set($data);
		$this->db->where($where);
		$this->db->update('playlist_musics');
		return 'success';
	}
        
	public function delete($where, $single = TRUE){
    	$this->db->where($where);
        if($single == TRUE){
    	   $this->db->limit(1);
        }
    	$this->db->delete('playlist_musics');
	}
    
    ////// !End CRUD ///////
    
    
    public function get_channel_playlist_musics($channel_id)
    {
        return $this->get_playlist_music(array('channel_id' => $channel_id));
    }
    
	public function get_new(){
		$playlist_music = new stdClass();
		$playlist_music->playlist_music = '';
		$playlist_music->topic = '';
		$playlist_music->date = time();
		return $playlist_music;
	}
 }