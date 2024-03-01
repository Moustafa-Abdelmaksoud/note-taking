<?php include('server.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div id="loggedIn" >
     
    
     <div class="logout">
        <?php if(isset($_SESSION['username'])): ?>
           <p>Welcome<span <?php echo $_SESSION['username'];?> ></span>!</p>
        <?php endif?>
           <button class="logout" name="logout"><a href="index.php?logout='1'">logout</a></button>
     </div>
     <div class="container">
       <h1><img src="images/notes.png">Notes</h1>
       <button class="btn"><img src="images/edit.png">Create Notes</button>
       <div class="notes-container">
           <!-- <p contenteditable="true" class="input-box">
               <img src="images/delete.png">
           </p> -->
       </div>
     </div>
   </div>   




  <script src="./main.js"></script>
</body>
</html>