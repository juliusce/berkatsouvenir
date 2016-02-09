<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
	//CONSTRUCT FOR KEKUATAN
	function __construct(){
		parent::__construct();
		//INIT MODEL TRANSACTION
		$this->load->model('Model_Home');
		$this->load->model('Model_Get_Product');
	}

	public function Index(){

			$category = $this->Model_Home->Normal_Select('category');
    $product = $this->Model_Get_Product->Normal_Select('product');
    //print_r($product);exit;
    $view_data['category'] = $category;
    $view_data['product'] = $product;
    $view_data['title'] = 'Product';
		$view_data['body'] = 'body/category';
		$this->load->view('wrapper',$view_data);
	}

}
