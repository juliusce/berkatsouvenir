<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Single_article extends CI_Controller {
	//CONSTRUCT FOR KEKUATAN
	function __construct(){
		parent::__construct();
		//INIT MODEL TRANSACTION
		$this->load->model('Model_Home');
		$this->load->model('Model_Get_Article');
	}

	public function index($id){
		if($id == NULL)
			redirect('article');
		$article = $this->Model_Get_Article->Get_By_Param('article',0,0,'id',$id);
    if(empty($article))
      redirect('article');
		$group_article = $this->Model_Get_Article->Get_By_Param('article',0,0,'YEAR(date_created)',date('Y',strtotime($article[0]['date_created'])));
		//print_r($group_item);exit;
		//print_r($item);exit;
		$view_data['article'] = $article[0];
		$view_data['group_article'] = $group_article;
		$view_data['title'] = 'Article';
		$view_data['body'] = 'body/single_article';
		$this->load->view('wrapper',$view_data);
	}
}
