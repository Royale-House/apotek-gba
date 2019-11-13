<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LoginSess{

	public function cek()
	{
		$this->ci =& get_instance();
		$this->sesi  	= $this->ci->session->userdata('isLogin');
		$this->userId 	= $this->ci->session->userdata('userId');
		$this->email 	= $this->ci->session->userdata('email');
		$this->role 	= $this->ci->session->userdata('role');
		if($this->sesi != TRUE){
			redirect('Auth/viewlogin','refresh');
		}
	}

}
