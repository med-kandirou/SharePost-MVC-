<?php

class Posts extends Controller{
    function __construct() {
        $this->postModel=$this->model('Post');
    }

    //display pages
    public function index(){
        $posts=$this->postModel->getpost();
        //display data in view index
        $this->view('posts/index',$posts);
    }

    public function about(){
        $this->view('posts/about');
    }

    public function add(){
        $this->view('posts/add');
    }
    public function update_pub($id_post){
        $data=$this->postModel->getinfo($id_post);
        $this->view('posts/update',$data);
    }

    //add post
    public function addpost(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            extract($_POST);
            if($this->postModel->addpost($_SESSION['id'],$title,$body)){
                header('location:'.URLROOT.'/posts/');
                exit();
            }
        }
    }
    public function show($id_post){
        $data=$this->postModel->show($id_post);
        $this->view('posts/show',$data);  
    }
    public function delete($id_post){
        $res=$this->postModel->delete_post($id_post);
        if($res==true){
            header('location:'.URLROOT.'/posts/');
            exit();
        }
    }

    public function update($id_post){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            extract($_POST);
            $res=$this->postModel->update($id_post,$title,$body);
            if($res==true){
                header('location:'.URLROOT.'/posts/');
                exit();
            }
        }
        
    }
}
