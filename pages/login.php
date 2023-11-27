<?php
session_start();

// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cafedb";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// Verificar se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $senha = $_POST['senha'];

    // Buscar usuário no banco de dados
    $stmt = $conn->prepare("SELECT id, senha FROM usuarios WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($id, $hashed_password);

    if ($stmt->fetch() && password_verify($senha, $hashed_password)) {
        $_SESSION['user_id'] = $id;
        header("Location: pagina_secreta.php");
    } else {
        echo "Login inválido. Tente novamente.";
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="./assets/style.css">
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="login.php" >
        <label>Username:</label>
        <input type="text" name="username" required>
        <br>
        <label>Senha:</label>
        <input type="password" name="senha" required>
        <br>
        <input type="submit" value="Login">
    </form>
    <a href="http://localhost/cafe_do_gloria/index.php">Voltar à Página Principal</a>
</body>
</html>
