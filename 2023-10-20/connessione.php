<?php
$dsn = 'mysql:dbname=test;host=127.0.0.1' ;
$user = 'root';
$password = '';
try {
   $pdo = new PDO($dsn, $user, $password);
    echo('connection established');
} catch (PDOException $e) {
   printf("Connection failed: %s \n", $e->getMessage());
   exit(1);
}

echo('<br>');
$names = ['mela', 'pera', 'banana','arancia', 'melone'];
$colours = ['rosso', 'verde', 'giallo', 'arancione', 'marrone'];

$insert = 'INSERT INTO fruit (nome,colour,calories) VALUE (:nome,:colour,:calories)';
$stmt= $pdo->prepare($insert);

for ($i=0; $i < 100; $i++) { 
    $nome = $names[rand(0,4)];
    $colour = $colours[rand(0,4)];
    $calories = rand(50,500);
    
    $stmt->bindParam(':nome',$nome,PDO::PARAM_STR);
    $stmt->bindParam(':colour',$colour,PDO::PARAM_STR);
    $stmt->bindParam(':calories',$calories,PDO::PARAM_STR);

    $stmt->execute();
}

$colour = 'rosso';
// $frc1to4 = 'SELECT * FROM fruit WHERE colour = "rosso" and calories between 100 and 400';
$frc1to4 = 'SELECT * FROM fruit WHERE colour = :colour and calories between 100 and 400';

$query = $pdo ->prepare($frc1to4);
$query->bindParam(':colour',$colour,PDO::PARAM_STR);
echo($query->execute());