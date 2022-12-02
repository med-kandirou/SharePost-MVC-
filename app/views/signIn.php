<?php require_once APPROOT.'/views/inc/header.php'; ?>

<h1 class="title">Create an account</h1>

<div class="container">
    <form action="../Users/signin" method="POST">
        <div class="form-group">
            <label for="email">Name :</label>
            <input type="text" name="nom" placeholder="your name"  class="form-control" value="<?php echo $data['name']; ?>">
            <p class="error"><?php if(empty($data['name'])){echo $data['name'];} ?></p>
        </div><br>
        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" name="email" placeholder="exemple@gmail.com" class="form-control" value="<?php echo $data['email']; ?>">
            <p class="error"><?php if(empty($data['email'])){echo '* Email is required';} ?></p>
        </div><br>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" name="pass" placeholder="Password" class="form-control" value="<?php echo $data['pass']; ?>">
            <p class="error"><?php if(empty($data['pass'])){echo '* Password is required';} ?></p>
        </div><br>
        <div class="form-group">
            <label for="pwd">Confirm password:</label>
            <input type="password" name="Cpass" placeholder="Confirm password" class="form-control" value="<?php echo $data['Cpass']; ?>">
            <p class="error"><?php if(empty($data['Cpass'])){echo '* Confirmation password is required';} ?></p>
        </div><br>
        <div class="form-group">
            <button type="submit" class="btn btn-success form-control">Sign up</button>
        </div><br>

        <div class="form-group">
            <a href="<?php echo URLROOT.'/Pages/login' ?>">Already you have account ?</a>
        </div><br>

        
    </form>

</div>

<?php require_once APPROOT.'/views/inc/footer.php'; ?>