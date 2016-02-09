<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Single_item extends CI_Controller {
	//CONSTRUCT FOR KEKUATAN
	function __construct(){
		parent::__construct();
		//INIT MODEL TRANSACTION
		$this->load->model('Model_Home');
		$this->load->model('Model_Get_Product');
	}

	public function index($id){
		if($id == NULL)
			redirect('category');
		$item = $this->Model_Get_Product->Get_By_Param('product',0,0,'id',$id);
		if(empty($item))
			redirect('category');
		$group_item = $this->Model_Get_Product->Get_By_Param('product',0,0,'nama_category',$item[0]['nama_category']);
		//print_r($group_item);exit;
		//print_r($item);exit;
		$view_data['item'] = $item[0];
		$view_data['group_item'] = $group_item;
		$view_data['title'] = 'Product';
		$view_data['body'] = 'body/single_item';
		$this->load->view('wrapper',$view_data);
	}
}
