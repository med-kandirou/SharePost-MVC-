<?php require_once APPROOT.'/views/inc/header.php';?>


<div class="container">
    <div id="actual">
        <h3>Actualités</h3>
        <a href="<?= URLROOT.'/Posts/add' ?>"><button type="button" class="btn btn-primary">Add post</button></a> 
    </div>
   
        <?php foreach($data as $post) : ?>
            <div class="posts">
                <h2><?= $post['title'] ?></h2>
                <p><?= $post['body'] ?></h2><br>
                <p class="written">writen by <?= $post['name'] ?> At <?= $post['created_at'] ?></p><br>
                <div class="form-group">
                    <button type="button" class="btn btn-info form-control" >MORE</button>
                </div>
            </div><br>
        <?php endforeach;  ?>
    
</div>


<?php require_once APPROOT.'/views/inc/footer.php'; ?>