<?php

$host = 'localhost';
$username = 'admin@project2.com';
$password = 'password123';
$dbname = 'bugme';

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $conn->query("SELECT * FROM issues");

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  date_default_timezone_set('Jamaica');
  $name = trim(filter_var($_POST['assigned'], FILTER_SANITIZE_STRING));
  $title = trim(filter_var($_POST['title'], FILTER_SANITIZE_STRING));
  $dr = trim(filter_var($_POST['description'], FILTER_SANITIZE_STRING));
  $ty = trim(filter_var($_POST['type'], FILTER_SANITIZE_STRING)) ;
  $priority = trim(filter_var($_POST['priority'], FILTER_SANITIZE_STRING));
  $stat = "Open"; 
  $created =  date("Y-m-d H:i:s");   
  $updated = date("Y-m-d H:i:s");
  $sql = "INSERT INTO issues (`title`, `description`, `type`,`priority`,`status`, `assigned_to`,`created`, `updated`) 
  VALUES ('$title', '$dr', '$ty', '$priority', '$stat','$name', '$created', '$updated')";
  $conn->exec($sql); 

  echo "New records created successfully";
  echo "The title: <strong>" . $_POST['title'] . "</strong> Description: <strong>" . $_POST['description'] . "</strong>.";
  echo "type:" .$_POST['type'] . "priority: <strong>" .$_POST['priority'] . "</strong>."  ; 
  echo $status; 
  echo $created;
  echo $name;  
  
  
  }else{

    echo "failed"; 

  }
  // if (!isset($_POST['title']) || !isset($_POST['description']) ||
  // empty($_POST['title']) || empty($_POST['description'])) {
  //   echo "What?!?!? You don't have a name or ID Number?";
  // } else {
  //   echo "Your name is: <strong>" . $_POST['title'] . "</strong> and your ID Number is: <strong>" . $_POST['description'] . "</strong>.";
  //   $sql = "INSERT INTO issues (`title`, `description`)
  //   VALUES ('$title', '$description')";
  //   mysql_query($conn, $sql);
    
  // }
// }
?>
