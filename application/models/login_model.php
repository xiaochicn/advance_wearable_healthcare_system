<?php
class Login_model extends CI_Model{
	public function __construct()
	{
		$this->load->database();
	}
	public function authenticate_user($email,$password){
		$q = $this->db->where('email',$email)
					  ->where('password',sha1($password))
					  ->limit(1)
					  ->get('users');
		if($q->num_rows() >0)
			return $q->row();
		return false;
	
	}
}

?>