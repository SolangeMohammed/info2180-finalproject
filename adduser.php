<?php session_start();
header('Access-Control-Allow-Origin: *');

$host = 'localhost';
$username = 'admin@project2.com';
$password = 'password123';
$dbname = 'bugme';
if($_SESSION['email']!='admin@project2.com'){
    echo"<br>You can not add a user please vist home or issues!";
    exit;
}
else

    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $fisrtname = filter_input(INPUT_GET,"firstname",FILTER_SANITIZE_STRING); 
    $lastname = filter_input(INPUT_GET,"lastname",FILTER_SANITIZE_STRING); 
    $email = filter_input(INPUT_GET,"email",FILTER_SANITIZE_EMAIL); 
    $password = filter_input(INPUT_GET,"password",FILTER_SANITIZE_STRING); 
    $passwordhash = md5($password);
    
    date_default_timezone_set('UTC');
    $datejoined = date('Y-m-d H:i:s');

    $add=$conn->prepare('INSERT INTO users(firstname, lastname, password, email, date_joined) VALUES
    (:fisrtname, :lastname, :passwordhash,:email, :datejoined);');
    $add->bindParam(":fisrtname",$fisrtname);
    $add->bindParam(":lastname",$lastname);
    $add->bindParam(":passwordhash",$passwordhash);
    $add->bindParam(":email",$email);
    $add->bindParam(":datejoined",$datejoined);
    $add->execute();
    echo"<br>Successfully added user!"



?>