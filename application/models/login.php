<?php 
 
class login extends CI_Model{
	function ambil_data(){
		return $this->db->get('user');
	}
}