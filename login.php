<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>INFO2180 Final Project</title>
 <link rel="stylesheet" href="styles.css">
 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <header class="header">
        <div>
           <i id="bug" class="fa fa-bug" style="font-size:36px;"></i>
           <h1 class="center">Bugme Issue Tracker</h1>
           <p></p>
   
        </div>
       
    </header>

        <form action="loginval.php" method="post">
            <h1>LOGIN</h1>
            <div class="form-group">
                <label for="">Email Address</label>
                <input type="text" class= "form" name="email" value="" placeholder="Please enter your email address" required>
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class= "form" name="password" value="" placeholder="Please enter your password" required>
            </div>
            <input type="submit" class="formbtn" value="Login">

        </form>
        <?php

            if(isset($_SESSION['message'])){
                $message = $_SESSION['message'];
                unset($_SESSION['message']);
            }
            else{
                $message = "";
            }
            echo $alert = !empty($message) ? $message : "";

            ?>

  

 </body>
 </html>