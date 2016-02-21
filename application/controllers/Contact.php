<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	//CONSTRUCT FOR KEKUATAN
	function __construct(){
		parent::__construct();
	}

	public function index(){
		$view_data['title'] = 'Contact';
		$view_data['body'] = 'body/contact';
		$this->load->view('wrapper',$view_data);
	}

	public function sent_inquiry(){
		$post = $this->input->post();
		if(!empty($post)){
			print_r($post);exit;
		}
	}
}
