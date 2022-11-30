<?php

class Users extends Controller{

    function __construct() {
        $this->userModel=$this->model('User');
    }

    public function signin(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            extract($_POST);
            $this->userModel->signin($nom,$email,$pass);
        }
    }

    public function login(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            extract($_POST);
            $this->userModel->login($email,$pass);
        }
    }

    public function logout(){
        $this->userModel->logout();
    }
}
