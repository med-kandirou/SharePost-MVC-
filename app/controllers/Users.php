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
            $data=[
                'email'=>$email,
                'pass'=>$pass,
                'email_err'=>'',
                'pass_err'=>'',
            ];
            if(empty($data['email'])){
                $data['email_err'] = 'Pleae enter Email';
            }
            // Validate Name
            if(empty($data['pass'])){
                $data['pass_err'] = 'Pleae enter Password';
            }
            $this->view('login',$data);
            //$this->userModel->login($email,$pass);
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
