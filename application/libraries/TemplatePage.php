<?php defined('BASEPATH') OR exit('No direct script access allowed');

class TemplatePage
{
    public function __construct()
    {
        //parent::__construct();
        $this->ci =& get_instance();
        $this->ci->load->helper(array('url','language'));
    }

    

    public function render($contentpage, $data)
    {
        //$defaultdata['menuhtml'] = $this->ci->session->userdata('main_menu');
        //$defaultdata['username'] = $this->ci->session->userdata('nickname');
        //$defaultdata['myname'] = $this->ci->session->userdata('name');

        $this->ci->load->view('layout/header',$data);
        $this->ci->load->view($contentpage);
        //$this->ci->load->view('layout/footer');
    }
}