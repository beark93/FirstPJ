<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View extends CI_Controller {
    
        public function View()
	{
            parent::__construct();
	}
        
	public function index()
	{
            $this->load->view('main/index');
	}
}
