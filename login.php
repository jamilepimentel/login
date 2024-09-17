<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Login</title>
</head>

<body>
    <h2>Formulário de Login</h2>
    <form method="POST" action="">
        <label for="username">Nome de usuário:</label>
        <input type="text" name="username" id="username" required>
        <br><br>

        <label for="password">Senha:</label>
        <input type="password" name="password" id="password" required>
        <br><br>

        <input type="submit" value="Entrar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username === "admin" && $password === "1234") {
            echo "<h3>Login bem-sucedido!</h3>";
        } else {
            echo "<h3>Login ou senha incorretos.</h3>";
        }
    }
    ?>

</body>

</html>
