<?php
require_once('../config/userDao.php');
require_once('../client-area/models/User.php');

$nomeUser = $_POST['nameUser'];
$sobrenomeUser = $_POST['lastNameUser'];
$emailUser = $_POST['emailUser'];
$senhaUser = password_hash($_POST['confirmaPasswdUser'], PASSWORD_DEFAULT);

var_dump($_POST);

$user = new User($nomeUser, $sobrenomeUser, $emailUser, $senhaUser);

var_dump($user);

$insert = UserDao::insert($user);

// Exibir mensagens de sucesso/erro, se necessário
if ($insert) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro ao cadastrar. Tente novamente.";
}
