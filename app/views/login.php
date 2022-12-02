<?php require_once APPROOT.'/views/inc/header.php';
  extract($data);
?>

<h1 class="title">Login</h1>

<div class="container">
    <form action="../Users/login" method="POST" >
      <div class="form-group">
        <label for="email">Email address:</label>
        <input type="email" name="email" placeholder="exemple@gmail.com" class="form-control" value="<?php if(!empty($email)) echo $email;?>">
        <p class="error"><?php if(!empty($email_err)) echo $email_err; ?></p>
      </div><br>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" name="pass" placeholder="Password" class="form-control" value="<?php if(!empty($pass)) echo $pass; ?>">
        <p class="error"><?php if(!empty($pass_err)) echo $pass_err; ?></p>
      </div><br>
      <div class="form-group">
        <button type="submit" class="btn btn-success form-control">Login</button>
      </div><br>
      <div class="form-group">
            <a href="<?php echo URLROOT.'/Pages/signIn' ?>">Don't have an account yet ?</a>
        </div><br>
    
    </form>
</div>

<?php require_once APPROOT.'/views/inc/footer.php'; ?>