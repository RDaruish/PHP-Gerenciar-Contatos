<?php
require __DIR__ . '/config/database.php';

$id = $_GET['id'] ?? null;
if ($id) {
    $stmt = $pdo->prepare('SELECT * FROM contatos WHERE id = ?');
    $stmt->execute([$id]);
    $contato = $stmt->fetch(PDO::FETCH_ASSOC);
}

include __DIR__ . '/views/editar_contato.php';
?>
