<?php require_once APPROOT.'/views/inc/header.php'; 
extract($data);
?>
<h1 class="title">Create an account</h1>

<div class="container">
    <form action="../Users/signin" method="POST">
        <div class="form-group">
            <label for="email">Name :</label>
            <input type="text" name="name" placeholder="your name"  class="form-control" value="<?php if(!empty($name)) echo $name;?>">
            <p class="error"><?php if(!empty($name_err)) echo ucwords($name_err);?></p>
        </div><br>
        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" name="email" placeholder="exemple@gmail.com" class="form-control" value="<?php if(!empty($email)) echo $email;?>">
            <p class="error"><?php if(!empty($email_err)){echo ucwords($email_err) ;} ?></p>
        </div><br>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" name="password" placeholder="Password" class="form-control" value="<?php if(!empty($password)) echo $password;?>">
            <p class="error"><?php if(!empty($password_err)){echo ucwords($password_err) ;} ?></p>
        </div><br>
        <div class="form-group">
            <label for="pwd">Confirm password:</label>
            <input type="password" name="confirmation" placeholder="Confirm password" class="form-control" value="<?php if(!empty($confirmation)) echo $confirmation;?>">
            <p class="error"><?php if(!empty($confirmation_err)){echo ucwords($confirmation_err) ;} ?></p>
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