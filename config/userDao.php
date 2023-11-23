<?php
require_once('../config/databaseconnect.php');
require_once('../client-area/models/User.php');

class UserDao
{
    public static function insert($user)
    {
        $conexao = Conexao::conectar();
        $query = "INSERT INTO tbUser (primeiroNomeUser, sobrenomeUser, emailUser, senhaUser) VALUES (?, ?, ?, ?)";
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(1, $user->getNome());
        $stmt->bindValue(2, $user->getSobrenome());
        $stmt->bindValue(3, $user->getEmail());
        $stmt->bindValue(4, $user->getSenha());

        // Executa a query e retorna true se bem-sucedido, false caso contrário
        return $stmt->execute();
    }

    public static function selectAll()
    {
    }

    public static function selectCod($codUser)
    {
    }

    public static function update($codUser, $user)
    {
    }

    public static function delete($codUser)
    {
    }
}
