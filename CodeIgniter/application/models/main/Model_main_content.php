<?php

class Model_main_content extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    
    function get_content1() {
        $data['msg'] = '따룽';
        
        return $data;
    }

}
