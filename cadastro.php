
<!-- cadastro.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = trim($_POST['nome']);
    $matricula = trim($_POST['matricula']);
    $curso = trim($_POST['curso']);
    $email = trim($_POST['email']);
    $telefone = trim($_POST['telefone']);
    $endereco = trim($_POST['endereco']);
    $cep = trim($_POST['cep']);
    $cidade = trim($_POST['cidade']);
    $uf = trim($_POST['uf']);
    $curso_hc = trim($_POST['curso_hc']);
    $carga_horaria = trim($_POST['carga_horaria']);

    if (empty($nome) || empty($email)) {
        header("Location: falha.php");
        exit();
    } else {
        header("Location: sucesso.php");
        exit();
    }
}
?>