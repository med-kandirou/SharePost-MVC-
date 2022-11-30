<?php require_once APPROOT.'/views/inc/header.php';?>


<h2 class="title">Add new post</h2>

<div class="container">
    <form action="../Posts/addpost" method="POST">
        <div class="form-group">
            <label for="email">Title :</label>
            <input type="text" name="title" placeholder="Title" class="form-control" required>
        </div><br>
        <div class="form-group">
            <label for="email">Body:</label>
            <textarea rows="7" name="body" placeholder="Your post" class="form-control" required></textarea>
        </div><br>

        <div class="form-group">
            <button type="submit" class="btn btn-success form-control">Add post</button>
        </div><br>

        <div class="form-group">
        </div><br>
    </form>
</div>



<?php require_once APPROOT.'/views/inc/footer.php'; ?>