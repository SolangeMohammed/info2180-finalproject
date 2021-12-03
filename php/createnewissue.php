<?php
$host = 'localhost';
$username = 'admin@project2.com';
$password = 'password123';
$dbname = 'bugme';

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
$stmt = $conn->query("SELECT * FROM users");

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<ul>
<?php foreach ($results as $row): ?>
  <li><?= $row['id']  . $row['firstname'] .  $row['lastname'] .   $row['password'] .    $row['email']; ?></li>
<?php endforeach; ?>
</ul>



