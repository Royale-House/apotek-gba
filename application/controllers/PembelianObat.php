<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PembelianObat extends CI_Controller {


	public function index()
	{
        $return = array();
        $data['menu']='Home';
        $data['menuParent']='PembelianObat';
        $this->temppage->render('pembelianobatView',$data);
	}

	public function tambah()
	{
        $return = array();
        $data['menu']='Home';
        $data['menuParent']='PembelianObat';
        $this->temppage->render('pembelianobatView',$data);
	}

	public function under_construction()
	{
		$this->temppage->render('underconstruction',null);
	}
}