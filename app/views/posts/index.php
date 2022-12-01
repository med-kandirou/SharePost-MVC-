<?php require_once APPROOT.'/views/inc/header.php';?>


<div class="container">
    <div id="actual">
        <h3>Actualités</h3>
        <a href="<?= URLROOT.'/Posts/add' ?>"><button type="button" class="btn btn-primary">Add post</button></a> 
    </div>
    <div class="posts">
        <h2>title</h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa et, maxime quis inventore voluptatem ea quas nostrum temporibus magnam, quos officia, in tempore! A neque illum quos in iusto culpa.</h2>
        <p class="written">writen bu kandirou at 2022/01/23</p>
        <div class="form-group">
        <button type="button" class="btn btn-info form-control" >MORE</button>
        </div>
    </div>
</div>


<?php require_once APPROOT.'/views/inc/footer.php'; ?>