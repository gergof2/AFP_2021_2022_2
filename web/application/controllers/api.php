<?php
class Api extends Controller {

    public $model;

    public function __construct()
    {
        parent::__construct();
        $this->model = $this->load_model('api_model');
    }

    # http://localhost/api GET
    public function index()
    {
        $this->load_view('home/index');
    }

    # http://localhost/api/delete GET
    public function deletemessage()
    {
        $result = $this->model->deleteMessage($_SESSION['id'], $_POST['messageid']);
        if($result == null){
            $_SESSION['message'] = "Delete successful!";
            $this->redirect('/message');
        }
        else{
            $_SESSION['message'] = "Delete failed!";
            $this->redirect('/message');
        }
    }

}

