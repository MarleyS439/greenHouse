<?php
require_once('../config/databaseconnect.php');
// require_once('../client-area/models/User.php');
require_once('../config/registerUser.php');
require_once('../config/loginUser.php');


class UserDao
{
    public static function insert($user)
    {
        try {
            $conexao = Conexao::conectar();
            $query = "INSERT INTO tbUser (primeiroNomeUser, sobrenomeUser, dataNascimentoUser, emailUser, rgUser, cpfUser, senhaUser, fotoPerfilUser, receberNoticias) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $conexao->prepare($query);

            $stmt->bindValue(1, $user['nome']);
            $stmt->bindValue(2, $user['sobrenome']);
            $stmt->bindValue(3, null, PDO::PARAM_NULL);
            $stmt->bindValue(4, $user['email']);
            $stmt->bindValue(5, null, PDO::PARAM_NULL);
            $stmt->bindValue(6, null, PDO::PARAM_NULL);
            $stmt->bindValue(7, $user['senha']);
            $stmt->bindValue(8, null, PDO::PARAM_NULL);
            $stmt->bindValue(9, null, PDO::PARAM_NULL);

            return $stmt->execute();
        } catch (PDOException $e) {
            die("Erro ao cadastrar usuário: " . $e->getMessage());
        }
    }


    public static function selectAll()
    {
        try {
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbUser";
            $stmt = $conexao->prepare($query);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Erro ao recuperar usuários: " . $e->getMessage());
        }
    }



    public static function LoginUser($loginUser)
    {
        try {
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbUser WHERE emailUser = :email";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(':email', $loginUser['email']);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

                // Verifica a senha usando password_verify
                if (password_verify($loginUser['senha'], $usuario['senhaUser'])) {
                    // Remove a senha do array antes de retornar
                    echo "Login realizado com sucesso!";
                    unset($usuario['senhaUser']);
                    return $usuario;
                } else {
                    return null; // Senha incorreta
                }
            } else {
                return null; // Usuário não encontrado
            }
        } catch (PDOException $k) {
            throw new Exception("Erro ao realizar o login: " . $k->getMessage());
        }
    }




    public static function update($codUser, $user)
    {
    }

    public static function delete($codUser)
    {
        try {
            $conexao = Conexao::conectar();
            $query = "DELETE FROM tbUser WHERE codUser = :codUser";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(':codUser', $codUser, PDO::PARAM_INT);

            return $stmt->execute();
        } catch (PDOException $e) {
            die("Erro ao excluir usuário: " . $e->getMessage());
        }
    }

}
