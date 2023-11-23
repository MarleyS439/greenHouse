<?php
require_once('./greenHouse/config/databaseconnect.php');

if (isset($_POST['emailUSer']) && isset($_POST['passwdUser'])) {
    if (empty($_POST['emailUSer']) || empty($_POST['passwdUser'])) {
        // Exiba mensagens de erro ou redirecione com uma mensagem de erro
        header("Location: caminho/para/seu/formulario/login.php?erro=1");
        exit();
    }

    $email = $_POST['emailUSer'];
    $senha = $_POST['passwdUser'];

    require_once('../../config/databaseconnect.php');
    $pdo = Conexao::conectar();

    $sql_code = "SELECT * FROM tbUser WHERE emailUser = :email";
    $stmt = $pdo->prepare($sql_code);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($usuario && password_verify($senha, $usuario['senhaUser'])) {
            // Usuário autenticado com sucesso
            header("Location: greenHouse/client-area/views/index.php");
            exit();
        } else {
            // Senha incorreta
            header("Location: greenHouse/client-area/views/index.php");
            exit();
        }
    } else {
        // Usuário não encontrado
        header("Location: greenHouse/client-area/views/index.php");
        exit();
    }
}
?>