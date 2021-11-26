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
}
