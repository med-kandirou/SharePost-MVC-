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
            $count=0;
            extract($_POST);
            $data=[
                'email'=>$email,
                'pass'=>$pass,
                'email_err'=>'',
                'pass_err'=>'',
            ];
            if(empty($data['email'])){
                $data['email_err'] = '* Email is required';
                $count++;
            }
            if(empty($data['pass'])){
                $data['pass_err'] = '* Password is required';
                $count++;
            }
            if($count!=0){
                $this->view('login',$data);
            }
            else{
                $this->userModel->login($email,$pass);
            }
        }
        else{
            $data=[
                'email'=>'',
                'pass'=>'',
                'email_err'=>'',
                'pass_err'=>'',
            ];
            $this->view('login',$data);
        }
    }

    public function logout(){
        $this->userModel->logout();
    }
}
