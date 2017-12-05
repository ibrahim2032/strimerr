<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 class Playlist_Model extends CI_Model {
	
	function __construct()
    {
        parent::__construct();
    }
    
	public $add_playlist_rules = array(
		'name' => array(
			'field' => 'name', 
			'label' => 'Playlist Title', 
			'rules' => 'trim|required|xss_clean'
		) 
    );
    
	////////  CRUD/////////////
	public function get_playlist($where = NULL, $single = FALSE, $playlist_music_join = NULL, $limit = NULL, $order = NULL)
	{
		if($where != NULL){
	            $this->db->where($where);
	        }
	        if($single == TRUE) {
			$method = 'row';
		}else {
			$method = 'result';
		}
        if($playlist_music_join != NULL){
            $this->db->join('playlist_musics', 'playlists.playlist_id = playlist_musics.'.$playlist_music_join);
        }
		if($limit != NULL){
	            $this->db->limit($limit);
		}
		if($order != NULL){
			$this->db->order_by("playlist_id", $order); 
		}
		return $this->db->get('playlists')->$method();
	}
	
	public function add_playlist($data)
	{
	    $this->db->set($data);
		$this->db->insert('playlists');
		return $this->db->insert_id();
	}
    
	public function update_playlist($data, $where)
	{
		$this->db->set($data);
		$this->db->where($where);
		$this->db->update('playlists');
		return 'success';
	}
        
	public function delete($where, $single = TRUE){
    	$this->db->where($where);
        if($single == TRUE){
    	   $this->db->limit(1);
        }
    	$this->db->delete('playlists');
	}
    
    ////// !End CRUD ///////
    
    
    public function get_channel_playlists($channel_id)
    {
        return $this->get_playlist(array('channel_id' => $channel_id));
    }
    
	public function get_new(){
		$playlist = new stdClass();
		$playlist->playlist = '';
		$playlist->topic = '';
		$playlist->date = time();
		return $playlist;
	}
 }