<?php

class Banner extends Connection
{
    private $url;
    private $texto;

    public function insert()
    {
        $sql = "INSERT INTO banner (url) VALUES (:url)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":url", $this->getUrl());

        if ($stmt->execute())
            return true;
        else
            return false;
    }

    public function read()
    {
        $rows = array();
        $sql = "SELECT * FROM banner";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $rows = $stmt->fetchAll();
        }
        return $rows;
    }

    public function delete($id)
    {
        $sql = "DELETE FROM banner WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":id", $id);
        $stmt->execute();
        return true;
    }

    public function update($id)
    {
        $sql = "UPDATE banner SET url = :url WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":url", $this->getUrl());
        $stmt->bindValue(":id", $id);
        $stmt->execute();
        return true;
    }

    public function readTextoBanner()
    {
        $rows = array();
        $sql = "SELECT * FROM texto_banner";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $rows = $stmt->fetchAll();
        }
        return $rows;
    }

    public function readTexto($id)
    {
        $row = array();
        $sql = "SELECT * FROM texto_banner WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue("id", $id);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch();
        }
        return $row;
    }

    public function updateTextoBanner($id)
    {
        $sql = "UPDATE texto_banner SET texto = :texto WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":texto", $this->getTexto());
        $stmt->bindValue(":id", $id);
        $stmt->execute();
        return true;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function setTexto($texto)
    {
        $this->texto = $texto;
    }

    public function getTexto()
    {
        return $this->texto;
    }
}
