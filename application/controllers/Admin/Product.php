<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
  //CONSTRUCT FOR KEKUATAN
  function __construct(){
    parent::__construct();
    //INIT MODEL TRANSACTION
    $this->load->model('Model_Transaction');
    $this->load->model('Model_Get_Product');
    date_default_timezone_set('Asia/Jakarta');
    //CHECK SESSION
    $sess = $this->session->userdata('user_data');
    if(empty($sess)){
      redirect('admin/login','refresh');
      exit;
    }
    define('TABLE2','category');
    define('TABLE','product');
    $this->session->set_userdata(array('breadcrumb'=>'manajemen_product'));
  }

  public function Index(){
    //SET SUB BREADCRUMB
    $this->session->set_userdata(array('main_sub_breadcrumb'=>'daftar_product'));
    //print_r($data);exit;
    $product = $this->Model_Get_Product->Normal_Select(TABLE);
    //DECLARE VIEW DATA FOR WRAPPER
    $view_data['data'] = $product;
    $view_data['body']   = 'admin/body/master/product/record_dsp';
    //LOAD VIEW DATA TO WRAPPER
    $this->load->view('admin/wrapper',$view_data);
  }

  //INDEX FOR ADD CATEGORY VIEW
	public function Tambah(){
    //SET SUB BREADCRUMB
    $this->session->set_userdata(array('main_sub_breadcrumb'=>'tambah_product'));
    //DECLARE VIEW DATA FOR WRAPPER
    $category = $this->Model_Get_Product->Normal_Select(TABLE2);
    //print_r($category);exit;
    $view_data['data']    = $category;
    $view_data['body']   = 'admin/body/master/product/add_dsp';
    //LOAD VIEW DATA TO WRAPPER
    $this->load->view('admin/wrapper',$view_data);
	}
  //END OF INDEX FOR ADD CATEGORY VIEW

  //INDEX FOR EDIT CATEGORY VIEW
	public function Perbarui(){
    //SET SUB BREADCRUMB
    $id = $this->uri->segment(4);
    if(!empty($id)){
      $this->session->set_userdata(array('main_sub_breadcrumb'=>'perbarui_product'));
      $product = $this->Model_Get_Product->Update_Select(TABLE,'id',$id);
      $category = $this->Model_Get_Product->Normal_Select(TABLE2);
      //DECLARE VIEW DATA FOR WRAPPER
      //print_r($data);exit;
      $view_data['data']   = $product[0];
      $view_data['data2']   = $category;
      $view_data['body']   = 'admin/body/master/product/edit_dsp';
      //LOAD VIEW DATA TO WRAPPER
      $this->load->view('admin/wrapper',$view_data);
    }else{
      echo('Anda tidak bisa mengakses laman ini');exit;
    }
  }
  //END OF INDEX FOR EDIT CATEGORY VIEW

  //POST CATEGORY
  public function Insert(){
    $post = $this->input->post();
    //CHECK IF EMPTY POST
    if(empty($post)){
      echo('Anda tidak bisa mengakses laman ini');exit;
    }else{
      $post_seo = array(
        'seo_title' => $post['seo_title'],
        'seo_keywords' => $post['seo_keywords'],
        'seo_description' => $post['seo_description'],
        'seo_author' => $post['seo_author'],
      );
      unset($post['seo_title']);
      unset($post['seo_keywords']);
      unset($post['seo_description']);
      unset($post['seo_author']);
      //VALIDATE TO DATABASE
      $exist = $this->Model_Get_Product->validate(TABLE,$post['nama_product']);
      if($exist==1){
        echo '<script>alert("Product Sudah Ada"); window.location.assign("'.base_url().'Admin/Product");</script>';
      } else{
        //INSERT TO DATABASE
        $config['upload_path'] = BASEPATH.'../includes/assets/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = 1000000;
        $this->load->library('upload');
        //CHECK UPLOAD IMAGE FIRST
        $filename = $_FILES['product_image']['name'];
        if(!empty($filename)){
          $ext = pathinfo($filename, PATHINFO_EXTENSION);
          //FOR FILE NAME
          $fileName = str_replace(' ','_',strtolower($post['nama_product']));
          //FOR UPLOAD
          $config['file_name'] = $fileName;
          $this->upload->initialize($config);

          if(!$this->upload->do_upload('product_image')){
            $error = $this->upload->display_errors();
            echo $error; exit;
          }else{
            $post['product_image'] = 'includes/assets/'.$fileName.'.'.$ext;
          }
        }
        //CHECK FILE IMAGE SECOND
        $filename2 = $_FILES['product_image2']['name'];
        if(!empty($filename2)){
          $ext2 = pathinfo($filename2, PATHINFO_EXTENSION);
          //FOR FILE NAME
          $fileName2 = str_replace(' ','_',strtolower($post['nama_product'])).'image2';
          //FOR UPLOAD
          $config['file_name'] = $fileName2;
          $this->upload->initialize($config);

          if(!$this->upload->do_upload('product_image2')){
            $error = $this->upload->display_errors();
            echo $error; exit;
          }else{
            $post['product_image2'] = 'includes/assets/'.$fileName2.'.'.$ext2;
          }
        }
        $id = $this->Model_Transaction->Insert_To_Db($post,TABLE);
        if(!empty($id)){
          $post_seo['seo_page'] = 1;
          $post_seo['id_seo_page'] = $id;
          $this->Model_Transaction->Insert_To_Db($post_seo,'seo');
        }
        echo '<script>alert("Berhasil Menambahkan Data"); window.location.assign("'.base_url().'Admin/Product");</script>';
      }
    }
  }

  //PERBARUI CATEGORY
  public function Update(){
    $post = $this->input->post();
    //CHECK IF EMPTY POST
    if(empty($post)){
      echo('Anda tidak bisa mengakses laman ini');exit;
    }else{
      $id = $post['id'];
      unset($post['id']);
      //VALIDATE TO DATABASE
      $exist = $this->Model_Get_Product->validate(TABLE,$post['nama_product']);
      if(!empty($exist) && ($exist['id']!=$id)){
        echo '<script>alert("Product Sudah Ada"); window.location.assign("'.base_url().'Admin/Product");</script>';
      } else{
        //UPDATE TO DATABASE
        $config['upload_path'] = BASEPATH.'../includes/assets/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = 1000000;
        $this->load->library('upload');
        //CHECK UPLOAD IMAGE FIRST
        $filename = $_FILES['product_image']['name'];
        if(!empty($filename)){
          $ext = pathinfo($filename, PATHINFO_EXTENSION);
          //FOR FILE NAME
          $fileName = str_replace(' ','_',strtolower($post['nama_product']));
          //FOR UPLOAD
          $config['file_name'] = $fileName;
          $this->upload->initialize($config);

          if(!$this->upload->do_upload('product_image')){
            $error = $this->upload->display_errors();
            echo $error; exit;
          }else{
            $post['product_image'] = 'includes/assets/'.$fileName.'.'.$ext;
          }
        }else{
          unset($post['product_image']);
        }
        //CHECK FILE IMAGE SECOND
        $filename2 = $_FILES['product_image2']['name'];
        if(!empty($filename2)){
          $ext2 = pathinfo($filename2, PATHINFO_EXTENSION);
          //FOR FILE NAME
          $fileName2 = str_replace(' ','_',strtolower($post['nama_product'])).'image2';
          //FOR UPLOAD
          $config['file_name'] = $fileName2;
          $this->upload->initialize($config);

          if(!$this->upload->do_upload('product_image2')){
            $error = $this->upload->display_errors();
            echo $error; exit;
          }else{
            $post['product_image2'] = 'includes/assets/'.$fileName2.'.'.$ext2;
          }
        }else{
            unset($post['product_image2']);
        }

        //UPDATE TO DATABASE
        $this->Model_Transaction->Update_To_Db($post,TABLE,'id',$id);
        echo '<script>alert("Berhasil Merubah Data"); window.location.assign("'.base_url().'Admin/Product");</script>';
      }
    }
  }

  //HAPUS CATEGORY
  public function Delete(){
    $uri = $this->uri->segment(4);
    $data = array(
      'deleted'	=> '1'
    );
    $this->Model_Transaction->Update_To_Db($data,TABLE,'id',$uri);
    echo '<script>alert("Berhasil Menghapus Data"); window.location.assign("'.base_url().'Admin/Product");</script>';
  }
  //END OF POST KEKUATAN
}
?>
