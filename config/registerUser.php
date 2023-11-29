<?php
require_once('../config/databaseconnect.php');
require_once('../config/userDao.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['nameUser']) && !empty($_POST['lastNameUser']) && !empty($_POST['emailUser']) && !empty($_POST['confirmaPasswdUser'])) {
        $user = [
            'nome' => $_POST['nameUser'],
            'sobrenome' => $_POST['lastNameUser'],
            'email' => $_POST['emailUser'],
            'senha' => password_hash($_POST['confirmaPasswdUser'], PASSWORD_DEFAULT)
        ];

        $insert = UserDao::insert($user);

        if ($insert) {
            echo "Cadastro realizado com sucesso!";
            header('Location: ../client-area/views/login.php');
        } else {
            echo "Erro ao cadastrar. Tente novamente.";
        }
    } else {
        echo "Campos de cadastro vazios no POST";
    }
} else {
    echo "Requisição não é do tipo POST";
}
?>
