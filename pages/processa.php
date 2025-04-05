<?php
header('Content-Type: application/json');
include '../includes/conexao.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cpf = isset($_POST['cpf']) ? trim($_POST['cpf']) : '';
    $creci = isset($_POST['creci']) ? trim($_POST['creci']) : '';
    $nome = isset($_POST['nome']) ? trim($_POST['nome']) : '';

    
    $cpf = preg_replace('/\D/', '', $cpf);

    // Validação no PHP
    if (strlen($cpf) !== 11 || strlen($creci) < 2 || strlen($nome) < 2) {
        die("Erro: Dados inválidos!");
    }

    // Inserção segura no banco de dados
    $stmt = $conn->prepare("INSERT INTO corretores (cpf, creci, nome) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $cpf, $creci, $nome);
    
    if ($stmt->execute()) {
        header("Location: ../pages/index.html"); 
        exit();
    } else {
        echo "Erro ao cadastrar: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
