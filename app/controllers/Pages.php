<?php

class Pages extends Controller{
    function __construct() {}
    
    public function index(){
        $this->view('index');
    }

    public function login(){
        $this->view('login');
    }

    public function signin(){
        $this->view('signin');
    }

    public function about(){
        $this->view('about');
    }
}
