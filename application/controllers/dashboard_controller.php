<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard_controller extends CI_Controller {

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
		$data['users'] = $this->users_model->get_all_users();
		$data['user_id'] = "dashboard";
		$this->load->view('template/header');
		$this->load->view('template/side_bar',$data);
		$this->load->view('dashboard/index');
		$this->load->view('template/inline_script');
		$this->load->view('template/footer');
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */