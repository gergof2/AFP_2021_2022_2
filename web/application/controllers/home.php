<?php

class Home extends Controller {

    public $model;
   

    public function __construct()
    {
        parent::__construct();
        $this->model = $this->load_model('api_model');


    }
    ///////////////////
    //nav link
    # http://localhost/
    public function index()
    {           
        $this->load_view('home/index');
    }
    public function dataTheme()
    {
        $_SESSION['data-theme'] = $_GET['theme'];
        header("Refresh:0");      
    }

    public function login(){
        $this->load_view('home/login');
    }

}
