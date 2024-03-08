<?php
    session_start();

$username = "";
$email = "";
$errors = array();
// connect to data base
$db = mysqli_connect('localhost', 'root', '123456', 'noteTaking');
// if the register button is clicked

if (isset($_POST['register'])) {
    $username = filter_var($_POST['username'],FILTER_SANITIZE_SPECIAL_CHARS);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    if (filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
        $email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
        $email = mysqli_real_escape_string($db, $_POST['email']);
    }else {
        $email= "";
    }
    $password_1 = filter_var($_POST['password_1'],FILTER_SANITIZE_SPECIAL_CHARS);
    $password_1 = mysqli_real_escape_string($db,$_POST['password_1']);
    $password_2 = filter_var($_POST['password_2'],FILTER_SANITIZE_SPECIAL_CHARS);
    $password_2 = mysqli_real_escape_string($db,$_POST['password_2']);
    // ensure that form fields are filled properly
    if (empty($username)) {
        array_push($errors, 'Username is required');
    }
    if (empty($email)) {
        array_push($errors, 'Emali is required');
    }
    if (empty($password_1)) {
        array_push($errors, 'Password is required');
    }
    if ($password_1 != $password_2) {
        array_push($errors, 'The two password do not match');
    }

    // if there are no errors, save user to database
    if (count($errors) == 0) {
        $password = md5($password_1);
        $sql = "INSERT INTO users (username, email, password) VALUES('$username', '$email', '$password')";
        mysqli_query($db, $sql); 
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: index.php'); // redirect to home page

    }
}

// log user in from login page
if (isset($_POST['login'])) {
    $username = filter_var($_POST['username'],FILTER_SANITIZE_SPECIAL_CHARS);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = filter_var($_POST['password'],FILTER_SANITIZE_SPECIAL_CHARS);
    $password = mysqli_real_escape_string($db,$_POST['password']);
    // ensure that form fields are filled properly
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password' ";
        $result = mysqli_query($db, $query);

        if(mysqli_num_rows($result) == 1){
            // log user in
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php'); // redirect to home page

        }else{
            array_push($errors,"Wrong username or bassword ");
        }
    }
}


// logout
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('Location: login.php');
}



?>
