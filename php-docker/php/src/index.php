<?php
$host = 'postgres'; // Nom du service dans docker-compose
$db   = 'exampledb';
$user = 'exampleuser';
$pass = 'examplepass';

$dsn = "pgsql:host=$host;dbname=$db";

try {
     $pdo = new PDO($dsn, $user, $pass);
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

$sql = "SELECT id, name, age FROM person";
$stmt = $pdo->query($sql);

echo "<table>";
echo "<tr><th>ID</th><th>Name</th><th>Age</th></tr>";
while ($row = $stmt->fetch()) {
    echo "<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['age']."</td></tr>";
}
echo "</table>";
?>
