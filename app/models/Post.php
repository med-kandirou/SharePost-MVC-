<?php

class Post extends database{
    function __construct() {}



    public function getpost(){
        $sql = "SELECT u.id, u.name, p.`title`, p.`body`, p.`created_at` FROM posts p inner join users u on u.id=p.user_id";
        $stmt=$this->openConnection()->query($sql);
        $data = $stmt->fetchAll();
        return $data;
    }

    public function addpost($id_user,$title,$body){
        $sql = "INSERT INTO `posts`(`user_id`, `title`, `body`, `created_at`) VALUES (:id_user,:title,:body,:date)";
        $stmt=$this->openConnection()->prepare($sql);
        $stmt->bindParam(':id_user', $id_user);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':body', $body);
        $date=date('Y-m-d H:i:s');
        $stmt->bindParam(':date', $date);

        if($stmt->execute()){
           echo "ajouter succes";
        }
        else{
            echo "no worked";
        }
    }
}
