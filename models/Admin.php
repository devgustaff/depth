<?php

class Admin extends Connection
{
    private $usuario;
    private $senha;

    public function isLogged()
    {
        if (isset($_SESSION["user_logged"]) && !empty($_SESSION["user_logged"])) {
            return true;
        } else {
            return false;
        }
    }

    public function getLogin()
    {
        $sql = "SELECT * 
                FROM admin 
                WHERE usuario = :usuario
                AND senha = :senha";

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":usuario", $this->getUsuario());
        $stmt->bindValue(":senha", $this->getSenha());
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $result = $stmt->fetch();
            $_SESSION["user_logged"] = $result["id"];
            return true;
        } else {
            return false;
        }
    }

    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    public function setSenha($senha)
    {
        $this->senha = md5($senha);
    }

    public function getUsuario()
    {
        return $this->usuario;
    }

    public function getSenha()
    {
        return $this->senha;
    }
}
