<?php
include '../includes/conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $creci = $_POST['creci'];

    $sql = "UPDATE corretores SET nome=?, cpf=?, creci=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $nome, $cpf, $creci, $id);

    if ($stmt->execute()) {
        echo "<script>alert('Cadastro atualizado com sucesso!'); window.location.href = '../pages/index.html';</script>";
    } else {
        echo "<script>alert('Erro ao atualizar!'); window.location.href = '../pages/index.html';</script>";
    }
}
?>