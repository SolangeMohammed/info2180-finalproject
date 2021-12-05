<?php
session_id(); 
session_start(); 
$host = 'localhost';
$username = 'admin@project2.com';
$password = 'password123';
$dbname = 'bugme';

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $conn->query("SELECT * FROM issues");

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  date_default_timezone_set('UTC');
  $assigned_to = trim(filter_var($_POST['assigned'], FILTER_SANITIZE_STRING));
  $title = trim(filter_var($_POST['title'], FILTER_SANITIZE_STRING));
  $dr = trim(filter_var($_POST['description'], FILTER_SANITIZE_STRING));
  $ty = trim(filter_var($_POST['type'], FILTER_SANITIZE_STRING)) ;
  $priority = trim(filter_var($_POST['priority'], FILTER_SANITIZE_STRING));
  $stat = "Open"; 
  
  //  $assigned =
  $created_by = $_SESSION['id']; 
  $stmt1 = $conn->query("SELECT firstname, lastname FROM users WHERE id= '$created_by'");
  $result = $stmt1->fetch(PDO::FETCH_ASSOC); 
  $fname = $result['firstname']; 
  $lname = $result['lastname']; 
  $createdby_nl = $fname." " . $lname; 


 
  $created =  date("Y-m-d H:i:s");   
  $updated = date("Y-m-d H:i:s");
  $sql = "INSERT INTO issues (`title`, `description`, `type`,`priority`,`status`, `assigned_to`,`created_by`,`created`, `updated`) 
  VALUES ('$title', '$dr', '$ty', '$priority', '$stat','$assigned_to', '$createdby_nl', '$created', '$updated')";
  $conn->exec($sql); 

  echo "New records created successfully";
  echo $createdby_nl;
   
  
  
  }else{

    echo "failed"; 

  }
 
?>
