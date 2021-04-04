<?php
    include('connect.php');
    session_start();
    $user = new user;
    $message ='';
    if(isset($_POST['submit'])){
        $field = array(
            'login'=>$_POST['login'],
            'password'=>$_POST['password'],
        );
        if($user->walidacja($field)){
            if($user->logowanie('user',$field)){
                $_SESSION['login'] = $_POST['login'];
                header("Location: index.php");
            }
        }
        else $message = $user->error;
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/LogIn.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form method="POST" class="main">
            <div class="logo">BEST COURSES</div>
            <input type="text" placeholder="Login" name="login">
            <input type="password" placeholder="Password" name="password">
            <input type="submit" value="Log in" name="submit">
        </form>
        <?php
            if(isset($message)) echo $message;
        ?>
    </div>
</body>
</html>