<?php

$host = 'localhost';
$username = 'admin@project2.com';
$password = 'password123';
$dbname = 'bugme';

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
$stmt = $conn->query("SELECT * FROM issues");

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // $title = $_POST['title'];
  // $description = $_POST['description'];
  $sql = "INSERT INTO issues (`title`, `description`, `created`) VALUES (:title, :dr)";
  $stmt1 = $conn->prepare($sql);
  $stmt1 ->bindParam(':title', $_POST['title']);
  $stmt1 ->bindParam(':dr', $_POST['description']);
  

  $stmt1-> execute(); 
  echo "New records created successfully";
  echo "The title: <strong>" . $_POST['title'] . "</strong> Description: <strong>" . $_POST['description'] . "</strong>.";
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
