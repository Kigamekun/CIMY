<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BaseController extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */


	public function __construct()
	{
		parent::__construct();
		$this->load->model("pegawai_model");
		$this->load->library('session');

	}

	public function dd($param)
	{
		var_dump($param);die;
	}
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function login()
	{
		if ($this->input->method() == 'post') {
			$user = $this->pegawai_model->where(['nip'=>$this->input->post('nip'),'password'=>md5($this->input->post('password'))]);
			if (!is_null($user)) {
				$this->session->set_userdata('auth', TRUE);
				return redirect('/dashboard');
			} else {
				return redirect('/login');
			}
		} else {
			
			if (is_null($this->session->userdata('auth'))) {
				$this->load->view('auth/login');
			} else {
				$this->load->view('dashboard');
			}
			
		}
		
	}

	public function logout()
	{
		$this->session->unset_userdata('auth');
		return redirect('/login');
	}

	public function dashboard()
	{
		if (is_null($this->session->userdata('auth'))) {
			$this->load->view('auth/login');
		} else {
			$this->load->view('page/dashboard');
		}
		
	}
	

}
