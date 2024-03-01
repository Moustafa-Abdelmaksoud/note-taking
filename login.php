<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sign in</title>
</head>
<body>
    <div id="login">
        <form method="post" action="login.php" name='form-login'>
    
            <h1>Login</h1>
            <?php include('errors.php');?>
    
            <label for="userName">Username</label>
            <input type="text" id="username" name="username">
    
            <label for="userPw">Password</label>
            <input type="password" name="password" id= "password">

            <button id="login_btn" type="submit" name="login" >login</button>

            <p>
                Not yet a member?  <a href="register.php">Sign up</a>
            </p>


            
    
        </form>
    </div>
</body>
</html>