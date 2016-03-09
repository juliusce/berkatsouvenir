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
			if(empty($post['tel']) || empty($post['name']) || empty($post['email']) || empty($post['message'])){
					echo '<script>alert("Anda harus mengisi formulir untuk melakukan email"); window.location.assign("'.base_url().'contact");</script>';
				}else{
					$message = "Hi Berkat Souvenir,<br/><br/>
					Namaku ".$post['name'].", kamu dapat menghubungi ku di ".$post['tel']."<br/>
	        aku ingin melakukan pemesanan atau pertanyaan tentang berkat souvenir. Berikut adalah pesanku:<br/>
					".$post['message']."<br/><br/>
					Mohon untuk info secepatnya di email ku ini atau kontak ak di no telp yang tercantum di atas.<br/><br/>
					Thanks<br/>
					Regards<br/>
					".$post['name'];
					$this->email_smtp_post($message,$post);
					echo '<script>alert("Terima kasih atas perhatian anda, kami akan mengabari anda secepatnya. Salam berkatsouvenir.com"); window.location.assign("'.base_url().'");</script>';
				}
		}else{
			echo '<script>alert("Something wrong issued"); window.location.assign("'.base_url().'");</script>';
		}
	}
	private function email_smtp_post($message,$data){
	//EMAIL SENDING
		$this->load->library('email');
		$this->email->set_newline("\r\n");
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'smtp.mail.yahoo.com';
		$config['smtp_port'] = '465';
		$config['smtp_user'] = 'berkatsouvenir@yahoo.com';
		$config['smtp_crypto'] = 'ssl';
		$config['smtp_pass'] = 'Claristacen060103';
		$config['wordwrap'] = TRUE;
		$config['newline'] = "\r\n";
		$config['mailtype'] = 'html';
		$this->email->initialize($config);
		$this->email->from('berkatsouvenir@yahoo.com', 'Pemesanan / Pertanyaan berkatsouvenir.com');
		$this->email->to('berkatsouvenir@yahoo.com');
		$this->email->subject('Permintaan / Pertanyaan berkatsouvenir.com');
		$this->email->message($this->create_emailhtml($message));
		//$this->email->print_debugger();
		$this->email->send();
		//END OF SENDING EMAIL
	}
	//Function Create HTML EMAIL
	private function create_emailhtml($message){
		$html = $message;
		return $html;
	}
}
