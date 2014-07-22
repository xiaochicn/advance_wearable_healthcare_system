<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
		$this->load->library('session');
		$this->load->helper('url');
	
	}
	public function index()
	{
		$data['success'] = true;
		$data['error_message'] = "";
		$this->load->view('login/index',$data);
		
	}
	public function login()
	{
		if(!isset($_POST['email']) || !isset($_POST['password']))
		{
			$data['success']  = false;
			$data['error_message'] = "Email or password is empty!";
			$this->load->view('login/index',$data);
		}
		else
		{
			$email = $_POST['email'];
			$password = $_POST['password'];
			$result = $this->login_model->authenticate_user($email,$password);
			if($result != false)
			{
				$this->session->set_userdata('first_name',$result->first_name);
				$this->session->set_userdata('last_name',$result->last_name);
				$this->session->set_userdata('id',$result->id);	
				redirect('dashboard');
			}
			else
			{
				$data['success']  = false;
				$data['error_message'] = "Email and password are not matched!";
				$this->load->view('login/index',$data);
			
			}
			
		
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */