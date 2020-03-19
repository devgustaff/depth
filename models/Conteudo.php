<?php

class Conteudo extends Connection
{
    private $url;
    private $conteudos;

    public function insert()
    {
        $sql = "INSERT INTO conteudos (texto_conteudo, url) VALUES (:texto_conteudo, :url)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":url", $this->getUrl());
        $stmt->bindValue(":texto_conteudo", $this->getConteudos());

        if ($stmt->execute())
            return true;
        else
            return false;
    }

    public function read()
    {
        $rows = array();
        $sql = "SELECT * FROM conteudos ORDER BY id DESC";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $rows = $stmt->fetchAll();
        }
        return $rows;
    }

    public function delete($id)
    {
        $sql = "DELETE FROM conteudos WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":id", $id);
        $stmt->execute();
        return true;
    }

    public function update($id)
    {
        $sql = "UPDATE conteudos SET texto_conteudo = :texto_conteudo, url = :url WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":url", $this->getUrl());
        $stmt->bindValue(":texto_conteudo", $this->getConteudos());
        $stmt->bindValue(":id", $id);
        $stmt->execute();
        return true;
    }

    public function getLista($offset, $limit)
    {
        $row = array();
        $sql = "SELECT * FROM conteudos ORDER BY id DESC LIMIT $offset, $limit";
        $sql = $this->pdo->query($sql);

        if ($sql->rowCount() > 0) {
            $row = $sql->fetchAll();
        }

        return $row;
    }

    public function getTotal()
    {
        $row = array();
        $sql = "SELECT COUNT(*) as c FROM conteudos";
        $sql = $this->pdo->query($sql);

        if ($sql->rowCount() > 0) {
            $row = $sql->fetch();
        }
        return $row["c"];
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function setConteudos($conteudos)
    {
        $this->conteudos = $conteudos;
    }

    public function getConteudos()
    {
        return $this->conteudos;
    }
}
