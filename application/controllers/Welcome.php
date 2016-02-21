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
		$view_data['promo'] = $this->Model_Home->Parameter_Select('product','promo',1,3);
		$latest_product = $this->Model_Home->Ordered_Select('product',2);
		$latest_article = $this->Model_Home->Ordered_Select('article',2);
		$latest_testi = $this->Model_Home->Ordered_Select('testimonial',2);
		$i = 0;
		foreach($latest_product as $key => $row){
			$view_data['latest'][$i]['type']  = 'single_item';
			$view_data['latest'][$i]['id'] 		= $row['id'];
			$view_data['latest'][$i]['name'] 	= $row['nama_product'];
			$i++;
		}
		foreach($latest_article as $key => $row){
			$view_data['latest'][$i]['type']  = 'single_article';
			$view_data['latest'][$i]['id'] 		= $row['id'];
			$view_data['latest'][$i]['name'] 	= $row['judul_article'];
			$i++;
		}
		foreach($latest_testi as $key => $row){
			$view_data['latest'][$i]['type']  = 'single_testimonial';
			$view_data['latest'][$i]['id'] 		= $row['id'];
			$view_data['latest'][$i]['name'] 	= $row['judul_testimonial'];
			$i++;
		}
		$view_data['arrival'] = $this->Model_Home->Arrival_Select('product');
		//print_r($view_data);exit;
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
