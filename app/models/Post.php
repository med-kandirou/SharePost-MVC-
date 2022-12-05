<?php

class Post extends database{
    function __construct() {}

    public function getpost(){
        $sql = "SELECT p.id_p , u.name, p.`title`, p.`body`, p.`created_at` FROM posts p, users u WHERE u.id_u=p.user_id order by p.id_p desc";
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
           return true;
        }
    }
    public function show($id_post){
        $sql = "SELECT p.id_p ,u.id_u, u.name, p.`title`, p.`body`, p.`created_at` FROM posts p, users u WHERE p.user_id=u.id_u and p.id_p=:id_post";
        $stmt=$this->openConnection()->prepare($sql);
        $stmt->bindParam(':id_post', $id_post);
        $stmt->execute();
        $res=$stmt->fetch();
        return $res;
    }
    public function delete_post($id_post){
        $sql = "DELETE FROM `posts` WHERE id_p=:id_post";
        $stmt=$this->openConnection()->prepare($sql);
        $stmt->bindParam(':id_post', $id_post);
        if($stmt->execute()){
            return true;
        }
    }

    public function getinfo($id_post){
        $sql = "SELECT `id_p`,`title`, `body` FROM `posts` WHERE id_p=".$id_post."";
        $stmt=$this->openConnection()->prepare($sql);
        $stmt->bindParam(':id_post', $id_post);
        $stmt->execute();
        $res=$stmt->fetch();
        return $res;
    }

    public function update($id_post,$title,$body){
        $sql = "UPDATE `posts` SET `title`=:title,`body`=:body WHERE id_p=:id_post";
        $stmt=$this->openConnection()->prepare($sql);
        $stmt->bindParam(':id_post', $id_post);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':body', $body);
        $stmt->execute();
        return true;
    }
}
