<?php

class Users extends Controller{

    function __construct() {
        $this->userModel=$this->model('User');
    }

    function geterror($data,$field)
    {
        if(empty($data[''.$field])){
            return 1;
        }
    }
    public function signin(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            extract($_POST);
            $data=[
                'name'=>trim($name),
                'email'=>trim($email),
                'password'=>trim($password),
                'confirmation'=>trim($confirmation),
                'name_err'=>'',
                'email_err'=>'',
                'password_err'=>'',
                'confirmation_err'=>'',
            ];
            $errors = array("name", "email", "password",'confirmation');
            $count_err=0;
            for($i=0;$i<count($errors);$i++){
                if($this->geterror($data,$errors[$i])==1){
                    $data[$errors[$i].'_err']='* '.$errors[$i].' is required';
                    $count_err++;
                }
            }
            if($count_err>0){
                $this->view('signin',$data);
            }
            else{
                $this->userModel->signin($nom,$email,$pass);
            }   
        }
    }

    public function login(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            extract($_POST);
            $data=[
                'email'=>$email,
                'password'=>$password,
                'email_err'=>'',
                'password_err'=>'',
            ];
            $errors = array("email", "password");
            $count_err=0;
            for($i=0;$i<count($errors);$i++){
                if($this->geterror($data,$errors[$i])==1){
                    $data[$errors[$i].'_err']='* '.$errors[$i].' is required';
                    $count_err++;
                }
            }
            if($count_err!=0){
                $this->view('login',$data);
            }
            else{
                $this->userModel->login($email,$pass);
            }
        }
    }

    public function logout(){
        $this->userModel->logout();
    }
}
