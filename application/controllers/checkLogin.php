<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class CheckLogin extends CI_Controller {
	function __construct(){ /// เป็นฟังชั่นที่จะทำงานก่อน index จะทำงานเมื่อมีการเรียกใช้คราส Login นี้
            parent::__construct();
			
    }
	function index()
	{	
		
		$data =$this->session->userdata('dataLogin'); 
		if ($data[0]['memberStatus']=='boss')
			{
				echo"<script langquage='javascript'>window.location='".base_url()."index.php/admin';</script>";
			}
			else if($data[0]['memberStatus']=='member')
			{
				echo"<script langquage='javascript'>window.location='".base_url()."index.php/user';</script>";
			}
			else
			{
				echo"<script langquage='javascript'>window.location='".base_url()."index.php/home';</script>";
				}
	}
	

}

?>