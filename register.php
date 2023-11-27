<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cafedb";
// Conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// Verificar se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    // Inserir dados na tabela
    $stmt = $conn->prepare("INSERT INTO usuarios (username, senha) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $senha);

    if ($stmt->execute()) {
        echo "Registro bem-sucedido. <a href='login.php'>Faça o login aqui</a>.";
    } else {
        echo "Erro ao registrar: " . $stmt->error;
    }

    $stmt->close();
    header("Location: login.php");
    exit();
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body class="login">
    <form method="post" action="register.php">
        <h2>Registro</h2>
        <label>Username:</label>
        <input type="text" name="username" required>
        <br>
        <label>Senha:</label>
        <input type="password" name="senha" required>
        <br>
        <input type="submit" value="Registrar">
        <a href="http://localhost/cafe_do_gloria/index.php">Voltar à Página Principal</a>
    </form>
</body>
</html>
