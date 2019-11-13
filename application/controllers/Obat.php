<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obat extends CI_Controller {

	public function index()
	{
		
		
        $return = array();
        $data['menu']='Home';
        $data['menuParent']='Obat';
        $this->temppage->render('obatView',$data);
	}

	public function under_construction()
	{
		$this->temppage->render('underconstruction',null);
	}
}
