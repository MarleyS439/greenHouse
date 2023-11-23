<?php
require_once('../config/databaseconnect.php');
require_once('../config/userDao.php');
class User {
    private $nome, $sobrenome, $email, $senha;

    // Métodos getters e setters

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getSobrenome() {
        return $this->sobrenome;
    }

    public function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function generateToken() {
        return bin2hex(random_bytes(16));
    }

    public function salvarImagem($novo_nome) {
        if (empty($_FILES['foto']['size']) != 1) {
            if ($novo_nome == "") {
                $novo_nome = md5(time()) . ".jpg";
            }
            $diretorio = "greenHouse/assets/img/clientes/";
            $nomeCompleto = $diretorio . $novo_nome;

            move_uploaded_file(($_FILES['foto']['tmp_name']), $nomeCompleto);
            return $novo_nome;
        } else {
            return $novo_nome;
        }
    }
}
