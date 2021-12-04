<!-- 
<?php
    // $conn2= mysqli_connect("localhost", "bugme", "username", "password");
    // if($conn2){
    //     echo "successful";
    // }else{
    //     echo "error";
    // }
?>  -->

<!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>INFO2180 Final Project</title>
    <link rel="stylesheet" href="login.css">
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
        <form action="login.php" method="post">

            <h2>LOGIN</h2>

            <?php if (isset($_GET['error'])) { ?>

                <p class="error"><?php echo $_GET['error']; ?></p>

            <?php } ?>

            <label>Email</label>

            <input type="text" name="username" placeholder="admin@project2.com"><br>

            <label>Password</label>

            <input type="password" name="password" placeholder="Password"><br> 

            <button type="submit">Login</button>

        </form>

    </body>

</html>