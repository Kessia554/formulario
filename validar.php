<?php
// validar.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $matricula = trim($_POST['matricula']);
    $curso = trim($_POST['curso']);
    // Adicione mais variáveis conforme necessário

    // Verifica se os campos obrigatórios estão preenchidos
    if (empty($nome) || empty($email) || empty($matricula) || empty($curso)) {
        // Se algum campo obrigatório estiver vazio, redireciona para a página de falha
        header("Location: falha.php");
        exit();
    } else {
        // Se todos os campos obrigatórios estiverem preenchidos, redireciona para a página de sucesso
        header("Location: sucesso.php");
        exit();
    }
}
?>
