<?php
require_once('../config/databaseconnect.php');
require_once('../config/userDao.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica se os campos de login estão presentes no POST
    if (!empty($_POST['emailUser']) && !empty($_POST['senha'])) {
        $emailLogin = $_POST['emailUser'];
        $senhaLogin = $_POST['senha'];

        $loginUser = [
            'email' => $emailLogin,
            'senha' => $senhaLogin
        ];

        $usuario = UserDao::LoginUser($loginUser);

        if ($usuario !== null) {
            $_SESSION['usuario'] = $usuario;
            header('Location: ../client-area/views/index.php');
            die();
        } else {
            echo "Falha na autenticação de login";
        }
    } else {
        echo "Campos de login vazios no POST";
    }
} else {
    echo "Requisição não é do tipo POST";
}
?>
