<?php

class User extends database{
    function __construct() {}

    public function signin($nom,$email,$pass){
        $sql = "INSERT INTO `users`(`name`, `email`, `password`) VALUES (:nom,:email,:mdp)";
        $stmt=$this->openConnection()->prepare($sql);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':mdp', $pass);
        if($stmt->execute()){
            header('location:'.URLROOT.'/Pages/login');
            exit();
        }
        else{
            echo "no worked";
        }
    }
    public function login($email,$pass){
        $sql = "SELECT `id`, `name`, `email`, `password` FROM `users` WHERE email=:email and password=:mdp";
        $stmt=$this->openConnection()->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':mdp', $pass);
        $stmt->execute();
        if($stmt->rowCount()==1){
            $res=$stmt->fetch(PDO::FETCH_ASSOC);
            $_SESSION['id']=$res['id'];
            $_SESSION['name']=$res['name'];
            $_SESSION['email']=$res['email'];
            $_SESSION['password']=$res['password'];
            header("location:../Posts/");
        }
        else{
            header("location:../Pages/login?etat=2");
        }
    }

    public function logout(){
        session_destroy();
        header("location:../Pages/login");
    }

    

}
