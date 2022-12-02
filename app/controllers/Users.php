<?php

class Users extends Controller{

    function __construct() {
        $this->userModel=$this->model('User');
        // $this->userView=$this->view('User');
    }

    public function signin(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $data=[
                'name'=>'',
                'email'=>'',
                'pass'=>'',
                'Cpass'=>'',
            ];
            extract($_POST);
            if(empty($nom)){
                $data['name']='Name is required';
            }
            if(empty($email)){
                $data['email']='Email is required';
            }
            if(empty($pass)){
                $data['pass']='Password is required';
            }
            if(empty($Cpass)){
                $data['Cpass']='Confirmation password is required';
            }
            $this->view('signin',$data);
            
            //$this->userModel->signin($nom,$email,$pass);
        }
    }

    public function login(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            extract($_POST);
            $data=[
                'email'=>$email,
                'pass'=>$pass,
            ];
            $this->view('login',$data);
            //$this->userModel->login($email,$pass);
        }
    }

    public function logout(){
        $this->userModel->logout();
    }
}
