<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	//CONSTRUCT FOR KEKUATAN
	function __construct(){
		parent::__construct();
		//INIT MODEL TRANSACTION
		$this->load->model('Model_Home');
	}

	public function index(){
		$view_data['title'] = 'Home';
		$view_data['body'] = 'body/home';
		$this->load->view('wrapper',$view_data);
	}

	public function ListFiles()
	{
		$sess = $this->session->userdata('user_data');
		$basepath = BASEPATH.'../uploads/slider';
		$files = get_filenames($basepath);
		echo json_encode($files);
	}
}
