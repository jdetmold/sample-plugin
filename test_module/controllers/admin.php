<?php

require dirname(__FILE__)."/../../vendor/autoload.php";

class Admin extends Admin_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model("test_model");

        # You can use $this->plugin to access any of your plugin's functions.
        $this->plugin = new Plugin_Sample_plugin();
    }
    
    function index() {
        echo "This is the index.";
    }
    
    function hello() {
        $this->template->foobar = $this->test_model->foo();
        $this->template->js("assets/admin.js");
        $this->template->css("assets/admin.css");
        $this->template->build("test_view");
    }
    
}