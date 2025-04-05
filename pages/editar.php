<?php
include '../includes/conexao.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM corretores WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $corretor = $result->fetch_assoc();
}
?>
<!DOCTYPE html>

<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assets/editar.css">
    <title>Editar Corretor</title>
</head>
<body>
    <h2>Editar Corretor</h2>
    <form action="atualizar.php" method="POST">
        <input type="hidden" name="id" value="<?= $corretor['id'] ?>">
        <input type="text" name="nome" value="<?= $corretor['nome'] ?>" required><br>
        <input type="text" name="cpf" value="<?= $corretor['cpf'] ?>" required><br>
        <input type="text" name="creci" value="<?= $corretor['creci'] ?>" required><br>
        <button type="submit">Salvar Alterações</button>
    </form>
</body>
</html>