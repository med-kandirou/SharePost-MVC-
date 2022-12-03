
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo URLROOT.'/css/style.css' ?>">

    <title><?php echo SITENAME ?></title>
</head>
<body>

    <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">SharePosts</a>
            </div>
            <?php if(isset($_SESSION['id'])) :?>
                <ul class="nav navbar-nav ">
                    <li><a class="nav-link" href="<?php echo URLROOT.'/Posts/'?>">Home</a></li>
                    <li><a href="<?php echo URLROOT.'/Posts/about'?>">About</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span><?php echo ' Welcome '.$_SESSION['name'] ?></a></li>
                    <li><a href="<?php echo URLROOT.'/Users/logout'?>"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
                </ul>
            <?php else :?>
                <ul class="nav navbar-nav ">
                    <li><a class="nav-link" href="<?php echo URLROOT.'/Pages/'?>">Home</a></li>
                    <li><a href="<?php echo URLROOT.'/Pages/about'?>">About</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo URLROOT.'/Pages/signin'?>"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="<?php echo URLROOT.'/Pages/login' ?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            <?php endif ;?>
        </div>
    </nav>

