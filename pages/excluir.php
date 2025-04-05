<?php
include '../includes/conexao.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM corretores WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "<script>alert('Registro excluído com sucesso!'); window.location.href = '../pages/index.html';</script>";
    } else {
        echo "<script>alert('Erro ao excluir o registro!'); window.location.href = '../pages/index.html';</script>";
    }
}
?>