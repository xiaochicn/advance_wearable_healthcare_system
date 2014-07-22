<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signup_controller extends CI_Controller {

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
		$this->load->helper('url');
		$this->load->model('users_model');
	
	}
	public function index()
	{
		$this->load->view('sign_up/index');
		
	}
	public function create_new_user()
	{
		$_POST['password'] = sha1($_POST['password']);
		unset($_POST['confirm_password']);
		$this->users_model->create_new_user($_POST);
		redirect('index');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */