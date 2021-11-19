<?php

class Controller {

    public function __construct() {
        
    }

    public function load_model($model) {
        require_once 'application/models/'.$model.'.php';
        return new $model;
    }
}