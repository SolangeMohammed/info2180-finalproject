<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

if (!isset($_POST['title']) || !isset($_POST['description']) ||
empty($_POST['title']) || empty($_POST['description'])) {
  echo "What?!?!? You don't have a name or ID Number?";
} else {
  echo "Your name is: <strong>" . $_POST['description'] . "</strong> and your ID Number is: <strong>" . $_POST['description'] . "</strong>.";
}
}

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
        <script src="createissues.js"></script>
    </head>
    <body>
        <header class="header">
            <div>
            <i id="bug" class="fa fa-bug" style="font-size:36px;"></i>
            <h1 class="center">Bugme Issue Tracker</h1>
            <p></p>
    
            </div>
        
        </header>
        <div id="new">

            <h3>Create Issue</h3>
            <form method="post" name="form" id="form" action="">
                <label for="title">Title</label>
                <input type="text" id="title" name="array[]" placeholder=" ">
            
                <label for="description">Description</label>
                <textarea id="description" name="array[]" placeholder=" " style="height:200px"></textarea>
                        
                <label for="assigned">Assigned To</label>
                <select id="issue" name="assigned">

                    <option value="name">Marcia Brady</option>
                </select><br><br>
            
                <label for="type">Type</label>
                <select id="issue" name="type">
                   <option value="type">Bug</option>
                   <option> Proposal </option>
                   <option> Task </option>
                </select><br><br>
            
                <label for="priority">Priority</label>
                <select id="issue" name="priority">
                    <option value="priority">Minor</option>
                    <option value="priority">Major</option>
                    <option value="priority">Critical</option>
                </select><br>
                        
                <input type="submit" id="issue_submit" value="Submit">
                    
            </form>
        </div>
        <div>
            <h2>Result</h2>
            <div id="result"></div>
        </div>  
        

    </body>
</html>
