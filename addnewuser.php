<?php
// header('Access-Control-Allow-Origin: *');

$host = 'localhost';
$username = 'admin@project2.com';
$password = 'password123';
$dbname = 'bugme';

// $conn = new PDO("mysql:host=$host;dbname=$dbname ", $username, $password);
$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
$fisrtname = filter_input($_GET['fisrtname'],FILTER_SANITIZE_STRING); 
$lastname = filter_input($_GET['lastname'],FILTER_SANITIZE_STRING); 
$email = filter_input($_GET['email'],FILTER_SANITIZE_EMAIL); 
$password = filter_input($_GET['password'],FILTER_SANITIZE_STRING); 
$passwordhash = password_hash($password,PASSWORD_DEFAULT);
date_default_timezone_set('UTC');
$datejoined = date('Y-m-d H:i:s');

$add=$conn->prepare('INSERT INTO users (id, firstname, lastname, pass_word, email, date_joined) VALUES
(:fisrtname, :lastname, :passwordhash,:email, :datejoined);');
$add->bindParam(":fisrtname",$fisrtname);
$add->bindParam(":lastname",$lastname);
$add->bindParam(":passwordhash",$passwordhash);
$add->bindParam(":email",$email);
$add->bindParam(":date_joined",$datejoined);
$add->execute();

echo $fisrtname;
echo $lastname;
echo $email;
echo $passwordhash;
?>
