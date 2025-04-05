<?php
include '../includes/conexao.php';

$sql = "SELECT * FROM corretores";
$result = $conn->query($sql);

$corretores = [];

while ($row = $result->fetch_assoc()) {
    $corretores[] = $row;
}

if (isset($_GET['sucesso']) && $_GET['sucesso'] == 1): 
    
    endif; 

// Retorna os dados no formato JSON
echo json_encode($corretores);
?>