<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimonial extends CI_Controller {
	//CONSTRUCT FOR KEKUATAN
	function __construct(){
		parent::__construct();
		//INIT MODEL TRANSACTION
		$this->load->model('Model_Home');
		$this->load->model('Model_Get_Testimonial');
	}

	public function Index($id = NULL){
		if($id == NULL){
			$testimonial = $this->Model_Get_Testimonial->Get_By_Param('testimonial',1,8);
		} else {
			$testimonial = $this->Model_Get_Testimonial->Get_By_Param('testimonial',1,100,'YEAR(date_created)',$id);
		}
		$group_testi   = $this->Model_Get_Testimonial->Get_By_Param('testimonial',1,8,0,0,'date_created');
		//print_r($article);exit;
		foreach($testimonial as $key => $row){
			$testimonial[$key]['non_tags'] = character_limiter(strip_tags($row['description'],10));
		}
		//print_r($testimonial);exit;
		$view_data['testimonial'] = $testimonial;
		$view_data['group_testi'] = $group_testi;
    $view_data['title'] = 'Testimonial';
		$view_data['body'] = 'body/testimonial';
		$this->load->view('wrapper',$view_data);
	}

}
