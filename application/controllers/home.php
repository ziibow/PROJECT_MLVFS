<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller {
	function __construct(){ /// เป็นฟังชั่นที่จะทำงานก่อน index จะทำงานเมื่อมีการเรียกใช้คราส Login นี้
            parent::__construct();
			
    }
	function index()
	{	
		$this->load->view('login');
	}
	
	function Login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		if($username!=""&&$password!=""){
			$this->Member->setMemberUsername($username);
			$this->Member->setMemberPassword($password);
			$dataLogin = $this->Member->login();

			if($dataLogin){
				$this->session->set_userdata('dataLogin',$dataLogin);
				echo "1";
			}else{
				echo "0";
			}
		}else{
			
			echo "3";
		}
	}
	function logOut(){
		$this->session->unset_userdata('dataLogin');
		echo"<script langquage='javascript'>window.location='".base_url()."index.php/home';</script>";
	}
}

?>