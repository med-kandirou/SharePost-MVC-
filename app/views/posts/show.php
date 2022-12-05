<?php require_once APPROOT.'/views/inc/header.php';?>

<h2 class="title">Details post</h2>
<div class="container">
    <div class="posts">
        <h2><?= $data['title']; ?></h2>
        <p><?= $data['body'] ?></h2><br>
        <p class="written">Writen by <?= $data['name'] ?> At <?= $data['created_at'] ?></p><br>
        <?php if($data['id_u']==$_SESSION['id']):?>
            <div class="form-group">
                <a href="<?= URLROOT.'/Posts/delete/'.$data['id_p'].'' ?>"><button type="button" value= class="btn btn-info form-control" >supprimer</button></a>
                <a href="<?= URLROOT.'/Posts/update_pub/'.$data['id_p'].'' ?>"><button type="button" value= class="btn btn-info form-control" >modifier</button></a>
            </div>
        <?php endif;?>
     </div><br>
    
</div>

<?php require_once APPROOT.'/views/inc/footer.php'; ?>