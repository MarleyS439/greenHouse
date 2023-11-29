<?php
class User
{
    public $codUser, $primeiroNomeUser, $sobreNomeUser, $emailUser, $token;

    public function getCodUser()
    {
        return $this->codUser;
    }

    public function setCodUser($codUser)
    {
        $this->codUser = $codUser;
    }

    public function getFirtNameUser()
    {
        return $this->primeiroNomeUser;
    }

    public function setFirstNameUser($primeiroNomeUser)
    {
        $this->primeiroNomeUser = $primeiroNomeUser;
    }

    public function getLasnameUser()
    {
        return $this->sobreNomeUser;
    }

    public function setLastnameUser($sobreNomeUser)
    {
        $this->sobreNomeUser = $sobreNomeUser;
    }

    public function getEmailUser()
    {
        return $this->emailUser;
    }

    public function setEmailUser($emailUser)
    {
        $this->emailUser = $emailUser;
    }

    public function generateToken()
    {
        return bin2hex(random_bytes(16));
    }

    public function saveImageUser($novo_nome)
    {
        if (!empty($_FILES['picture']['siz']) != 1) {
            if ($novo_nome == "") {
                $novo_nome = md5(time() . "jpg");
            }

            $directory = "../../assets/img/clientes";

            $nomeCompleto = $directory . $novo_nome;

            move_uploaded_file($_FILES['picture']['tmp_name'], $nomeCompleto);

            return $novo_nome;
        } else {
            return $novo_nome;
        }
    }
}
