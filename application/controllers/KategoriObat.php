<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KategoriObat extends CI_Controller {

	public function index()
	{
		
		
        $return = array();
        $data['menu']='Home';
        $data['menuParent']='Kategori Obat';
        $this->temppage->render('kategoriObatView',$data);
	}

	public function under_construction()
	{
		$this->temppage->render('underconstruction',null);
	}
}
