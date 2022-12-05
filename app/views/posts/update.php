<?php require_once APPROOT.'/views/inc/header.php';?>


<h2 class="title">Update post</h2>

<div class="container">
    <form action="../Posts/update" method="POST">
        <div class="form-group">
            <label for="email">Title :</label>
            <input type="text" name="title" placeholder="Title" class="form-control" value="<?php echo $data['title'] ?>" required>
        </div><br>
        <div class="form-group">
            <label for="email">Body:</label>
            <textarea rows="7" name="body" placeholder="Your post" class="form-control" required ><?php echo $data['body']; ?></textarea>
        </div><br>

        <div class="form-group">
            <button type="submit" class="btn btn-success form-control">update post</button>
        </div><br>

        <div class="form-group">
        </div><br>
    </form>
</div>



<?php require_once APPROOT.'/views/inc/footer.php'; ?>