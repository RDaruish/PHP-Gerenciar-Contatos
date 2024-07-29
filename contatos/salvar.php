<?php
require __DIR__ . '/config/database.php';

$id = $_POST['id'] ?? null;
$nome = $_POST['nome'];
$email = $_POST['email'];
$celular = $_POST['celular'];

if ($id) {
    $stmt = $pdo->prepare('UPDATE contatos SET nome = ?, email = ?, celular = ? WHERE id = ?');
    $stmt->execute([$nome, $email, $celular, $id]);
} else {
    $stmt = $pdo->prepare('INSERT INTO contatos (nome, email, celular) VALUES (?, ?, ?)');
    $stmt->execute([$nome, $email, $celular]);
}

header('Location: index.php');
exit;
?>
