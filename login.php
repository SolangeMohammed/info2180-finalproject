<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>INFO2180 Final Project</title>
 <link rel="stylesheet" href="login.css">
</head>
<body>
    <header class="header">
        <div class="width">
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
                <label for="" >Password</label>
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