<?php
require __DIR__ . '/config/database.php';

$stmt = $pdo->query('SELECT * FROM contatos');
$contatos = $stmt->fetchAll(PDO::FETCH_ASSOC);

include __DIR__ . '/views/contatos.php';
?>
