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

    public function login()
    {        
        if(!empty($_POST['username']) && !empty($_POST['password']))
        {
            $result =  $this->model->getLogin($_POST['username'], $_POST['password']);
            if (isset($result['username'])) {
                $_SESSION['username'] = $result['username'];
                $_SESSION['id'] = $result['id'];
                $this->redirect('/message');
            } else {
                $_SESSION['message'] = 'Login failed!';
                $this->redirect('/login');
            }
        }
    }

    public function register(){
             
        if(!empty($_POST['username']) && !empty($_POST['password'] && !empty($_POST['email'])))
        {
            $result = $this->model->postRegister($_POST['username'], $_POST['email'], sha1($_POST['password']));
            if ($result == null) {
                $_SESSION['message'] = null;
                $this->redirect('/login');
            }else
            $_SESSION['registration'] = $result;
            $this->redirect('/registration');
        }
        
    }

    public function sendmessages(){
        
         if(!empty($_SESSION['username']))
         {
            $this->model->sendMessages($_SESSION['id'], $_POST['message']);
            $this->redirect('/message');
         }
    }

}

