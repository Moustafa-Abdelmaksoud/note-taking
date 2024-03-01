<?php
    include('server.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>
<body>
    <div id="login">
        <form method="post" action="register.php" name='form-login'>
            <!-- dsiplay validation errors here -->
            
    
            <h1>SIGN UP</h1>
            <?php include('errors.php');?>
            <label for="userName">Username</label>
            <input type="text" id="username" name="username" value="<?php echo $username ?>" required>

            <label for="email">Email</label>
            <input type="text"  name="email" value="<?php echo $email ?>" required>
    
            <label for="userPw">Password</label>
            <input type="password" name="password_1" id= "password"  required>

            <label for="userPw">Confirm Password</label>
            <input type="password" name="password_2" id= "password" required>

            <button id="login_btn" type="submit" name="register" >Register</button>

            <p>
                Alrady a member? <a href="login.php">Sign in</a>
            </p>


            
    
        </form>
    </div>
</body>
</html>