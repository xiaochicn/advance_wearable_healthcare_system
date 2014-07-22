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
}

?>