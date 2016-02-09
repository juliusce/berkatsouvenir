<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {
	//CONSTRUCT FOR KEKUATAN
	function __construct(){
		parent::__construct();
		//INIT MODEL TRANSACTION
		$this->load->model('Model_Home');
		$this->load->model('Model_Get_Article');
	}

	public function Index($id = NULL){
		if($id == NULL){
			$article = $this->Model_Get_Article->Get_By_Param('article',1,8);
		} else {
			$article = $this->Model_Get_Article->Get_By_Param('article',1,100,'YEAR(date_created)',$id);
		}
		$group_article = $this->Model_Get_Article->Get_By_Param('article',1,8,0,0,'date_created');
		//print_r($article);exit;
		$view_data['article'] = $article;
		$view_data['group_article'] = $group_article;
    $view_data['title'] = 'Article';
		$view_data['body'] = 'body/article';
		$this->load->view('wrapper',$view_data);
	}

}
