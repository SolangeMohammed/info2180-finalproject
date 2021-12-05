<?php session_start();
require_once "./phpfunctions.php";?>
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
        <div class = "section">
            <div class="nav">
                <div class="tabs">
                    <ul class="mainNav"> 
                        <a class="active " data-toggle="tab" href="#home"><i class="fa fa-home"></i>    Home</a>
                        <a data-toggle="tab" href="#add"><i class="fa fa-plus-circle" aria-hidden="true"></i>    Add User</a>
                        <a data-toggle="tab" href="#new"><i class="fa fa-plus-circle" aria-hidden="true"></i>    New Issue</a>
                        <a href="./logout.php"><i class='fa fa-power-off'></i>    Logout</a>
                    </ul>
                </div>
            </div>  
                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                        <form action="">
                       <!-- <script src="homescreen.js" type="text/javascript"></script>-->
                            <div class="issues">
                            <h1 class="h1">Issues</h1>
                            <button data-toggle="tab" href="#new" class="new-issue" id="new_issue">Create New Issue</button>
                            </div>
                            <div class="filter">
                            <p class="par">Filter by: </p>
                            <button class="all" id="all_id" >All</button>
                            <button class="open" id="open_id" >Open</button>
                            <button class="myticket" id="my-ticket_id">My Tickets</button>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th>Title</th>
                                    <th>Type</th>
                                    <th>Status</th>
                                    <th>Assigned To</th>
                                    <th>Created</th>
                                    </tr>
                                
                                </thead>
                                <?php

                                $host = 'localhost';
                                $username = 'admin@project2.com';
                                $password = 'password123';
                                $dbname = 'bugme';
                                
                                $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
                                $stmt = $conn->query("SELECT * FROM issues");
                                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                ?>
                                <tbody id="table-body">
                                    <tr>
                                        <?php foreach($results as $row):?>
                                            <tr>

                                                <input id ="issueID"type="hidden" value="<?=$row['id']?>"/>
                                                <td><b>#<?= $row['id']." "?></b><a id="click" style="cursor:pointer"><?=$row['title']?></b></td>
                                                <td><?= $row['type'] ?></td>
                                                <td><button> <?= $row['status']?></button> </td>
                                                <td><?= $row['assigned_to'] ?></td>
                                                <td><?=$row['created']?></td>
                                                            
                                            </tr>
                                        <?php endforeach; ?> 
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>  
                    <div id="add" class="tab-pane fade">
                        <h3>New User</h3>
                        <form>
                            <script src="script.js" type="text/javascript"></script>
                            <label for="fname">Firstname</label>
                            <input type="text" id="fname" name="fname" placeholder=" ">
                            <label for="lname">Lastname</label>
                            <input type="text" id="lname" name="lname" placeholder=" ">
                            <label for="password">Password</label>
                            <input type="text" id="password" name="password" placeholder=" ">
                            <label for="email">Email</label>
                            <input type="text" id="email" name="email" placeholder=" ">
                            <input type="submit"  id="submitform"class = "submit" value="Submit">
                            <div id="results">
                            </div>
                        </form>
                     </div>                    
                    <div id="new" class="tab-pane fade">
                            <h3>Create Issue</h3>
                            <form method="post" name="form" id="form" action="">
                                <script src="script.js" type="text/javascript"></script>
                                <label for="title">Title</label>
                                <input type="text" id="title" name="array[]" placeholder=" ">
                                
                                <label for="description">Description</label>
                                <textarea id="description" name="array[]" placeholder=" " style="height:200px"></textarea>
                                            
                                <label for="assigned">Assigned To</label>
                                <select id="assigned" name="assigned">
                                    <option value="name"></option>
                                    <option value="name2">Admin Doe</option>
                                    <option value="name1">Jane Doe</option>
                                    <option value="name1">John Fredrick</option>    
                                </select><br><br>
                                
                                <label for="type">Type</label>
                                <select id="type" name="type">
                                    <option value="name"></option>
                                    <option value="bug">Bug</option>
                                    <option value="proposal"> Proposal </option>
                                    <option value="task"> Task </option>
                                </select><br><br>
                                
                                <label for="priority">Priority</label>
                                <select id="priority" name="priority">
                                    <option value="minor">Minor</option>
                                    <option value="major">Major</option>
                                    <option value="critical">Critical</option>
                                </select><br>
                                            
                                <button type="submit" id="issue_submit" value="Submit">Submit</button>
                                    
                            </form>
                            <div>
                                <div id="result"></div>
                            </div>  
                        </div>
                        
                    
                    
                    <div id="logout" class="tab-pane fade">
                    </div>
                </div>
        </div>
    </body>
</html>