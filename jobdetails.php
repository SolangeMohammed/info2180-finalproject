<?php
session_start();
$iden = filter_input(INPUT_GET,'inden',FILTER_SANITIZE_STRING)); 
require "./configdatabase.php";

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $conn->query("SELECT * FROM issues WHERE id='$iden'");
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);



?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
        <title>INFO2180 Final Project</title>
        <link rel="stylesheet" href="styles.css" media="screen" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="homescreen.js"></script>
    </head>
    <body>
        <header class="header">
            <div>
            <i id="bug" class="fa fa-bug" style="font-size:36px;"></i>
            <h1 class="center">Bugme Issue Tracker</h1>
            <p></p>
    
            </div>
        
        </header>
        <div class="main">

            <div class="display">
            <h1> <? $results['title'] ?></h1>
                <h3><? "Issue #", $results['id'] ?></h3>  
            </div>
            <div class="issue">
            <div class="article">
                <article class="mainArticle">

                <? $results['description'] ?><
                                                
                    <p>> </p>
                    <p>></p>
                    
                                    
                </article>
                                            
            </div>
        
       
            <div class="asideBar">
                <aside class="sidebar">
                    <div class ="bar">
                        <h3>Assigned to:</h3>
                        <p class="lineHeight"><? $results['assigned_to'] ?></p>
                        <h3>Type:</h3>
                        <p class="lineHeight"><? $results['type'] ?></p>
                        <h3>Priority:</h3>
                        <p class="lineHeight"><? $results['priority'] ?></p>
                        <h3>Status: </h3>
                        <p class="lineHeight"><? $results['status'] ?></p>
                                            
                    </div>
                    <div class="buttons">
                        <button class="blue">Marked as Closed</button>
                        <br><br>
                        <button class="green">Mark in Progress</button>
                        
                    </div>
                </aside>
                        
            </div>
        </div>
                    
        
</body>
</html>
                    
        

                           
                        
       

        
                    

