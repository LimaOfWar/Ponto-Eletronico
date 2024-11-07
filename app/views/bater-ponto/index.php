<?php
session_start();
include 'conexao.php'; // Conexão com o banco de dados

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $funcionario_id = $_SESSION['funcionario_id'];
    $data = date('Y-m-d');
    $hora_entrada = date('H:i:s');

    $sql = "INSERT INTO Ponto (funcionario_id, data, hora_entrada) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iss", $funcionario_id, $data, $hora_entrada);
    $stmt->execute();
    $stmt->close();
    echo "Ponto registrado com sucesso!";
}
?>