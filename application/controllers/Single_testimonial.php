<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Single_testimonial extends CI_Controller {
	//CONSTRUCT FOR KEKUATAN
	function __construct(){
		parent::__construct();
		//INIT MODEL TRANSACTION
		$this->load->model('Model_Home');
		$this->load->model('Model_Get_Testimonial');
	}

	public function index($id){
		if($id == NULL)
			redirect('testimonial');
		$testi = $this->Model_Get_Testimonial->Get_By_Param('testimonial',0,0,'id',$id);
    if(empty($testi))
      redirect('testimonial');
		$group_testi = $this->Model_Get_Testimonial->Get_By_Param('testimonial',0,0,'YEAR(date_created)',date('Y',strtotime($testi[0]['date_created'])));
		//print_r($group_item);exit;
		//print_r($item);exit;
		$view_data['testi'] = $testi[0];
		$view_data['group_testi'] = $group_testi;
		$view_data['title'] = 'Testimonial';
		$view_data['body'] = 'body/single_testimonial';
		$this->load->view('wrapper',$view_data);
	}
}
