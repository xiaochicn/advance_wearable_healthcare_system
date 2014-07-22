<?php
class Users_model extends CI_Model{
	public function __construct()
	{
		$this->load->database();
	}
	public function create_new_user($data){
		$current= date('Y-m-d H:i:s');
		$data['created_date'] = $current;
		$data['modified_date'] = $current;
		$res = $this->db->insert('users',$data);
		if(!$res)
		{
			$msg = $this->db->_error_message();
			$num = $this->db->_error_number();
			return $num;
		}
	
	}
	public function get_all_users()
	{
		$q = $this->db->select('id, first_name, last_name')
					  ->get('users');
		return $q->result_array();
	
	}
	public function get_user_by_id($id)
	{
		$q = $this->db->select('first_name,last_name')
					  ->where('id',$id)
					  ->get('users');
		return $q->result_array();
	}
}

?>