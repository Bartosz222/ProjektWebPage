<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/home.css" type="text/css"/>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">BEST COURSES</div>
            <div class="category">Category</div>
            <div class="searchBar">
                <input type="text" class="search" placeholder="Search...">
            </div>
            <?php if(isset($_SESSION['login'])):?>
                Cześć, <?=$_SESSION['login']?>
                <a href="logout.php">Wyloguj</a>
                <?php else :?>
                    <div class="HomeBts">
                        <a href="LogIn.php"><button class="login">Log in</button></a>
                        <a href="SignUp.php"><button class="login">Sign up</button></a>
                    </div>
                <?php endif;?>
            
        </div>
    </div>
</body>
</html>
<ol>
    <li><a href="#">dział - 1</a></li>
</ol>