<?php
require __DIR__ . '/config/database.php';

$id = $_GET['id'] ?? null;
if ($id) {
    $stmt = $pdo->prepare('DELETE FROM contatos WHERE id = ?');
    $stmt->execute([$id]);
}

header('Location: index.php');
exit;
?>
