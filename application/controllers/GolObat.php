<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GolObat extends CI_Controller {

	
	public function index()
	{
		
		
        $return = array();
        $data['menu']='Home';
        $data['menuParent']='Golongan Obat';
        $this->temppage->render('golObatView',$data);
	}

	public function under_construction()
	{
		$this->temppage->render('underconstruction',null);
	}
}
