<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View extends CI_Controller {
    
        public function __construct()
	{
            parent::__construct();
	}
        
	public function index()
	{
            $this->load->model('main/model_main_content');
            
            $content1 = $this->model_main_content->get_content1();
            $data['content1'] = $this->load->view('main/sub/content1', $content1,true);
            $this->load->view('main/view',$data);
	}
}
