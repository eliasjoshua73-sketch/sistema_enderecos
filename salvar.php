<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $rua = $_POST["rua"];
    $numero = $_POST["numero"];
    $bairro = $_POST["bairro"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $cep = $_POST["cep"];

    $sql = "INSERT INTO enderecos
    (nome, rua, numero, bairro, cidade, estado, cep)
    VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        $nome,
        $rua,
        $numero,
        $bairro,
        $cidade,
        $estado,
        $cep
    ]);

    header("Location: index.php");
    exit;
}
?>