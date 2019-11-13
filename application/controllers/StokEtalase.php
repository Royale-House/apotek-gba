<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StokEtalase extends CI_Controller {

	
	public function index()
	{
		
		
        $return = array();
        $data['menu']='Home';
        $data['menuParent']='Stok Etalase';
        $this->temppage->render('stokEtalaseView',$data);
	}

	public function under_construction()
	{
		$this->temppage->render('underconstruction',null);
	}
}
