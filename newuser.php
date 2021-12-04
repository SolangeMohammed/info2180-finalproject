<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
        <title>INFO2180 Final Project</title>
        <link rel="stylesheet" href="styles.css" media="screen" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="script.js"></script>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

    </head>
    <body>
        <header class="header">
            <div>
            <i id="bug" class="fa fa-bug" style="font-size:36px;"></i>
            <h1 class="center">Bugme Issue Tracker</h1>
            <p></p>
    
            </div>
        
        </header>
        <div id="add" class="">
                  <h3>New User</h3>
                  <form id="new-user">
                    <!-- <script src="script.js" type="text/javascript"></script> -->
                    <label for="fname">Firstname</label>
                    <input type="text" id="fname" name="fname" placeholder=" ">
                    <label for="lname">Lastname</label>
                    <input type="text" id="lname" name="lname" placeholder=" ">
                    <label for="password">Password</label>
                    <input type="text" id="password" name="password" placeholder=" ">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" placeholder=" ">
                    <input type="submit"  id = "submit"class = "submit" value="Submit">
                  </form>
                
        </div>
    </body>
</html>
            
