<?php

class Connection
{
    protected $pdo = null;

    public function __construct()
    {
        try {
            global $config;
            $this->pdo = new PDO(
                "mysql:dbhost=" . $config["dbhost"] .
                    ";dbname=" . $config["dbname"],
                $config["dbuser"],
                $config["dbpass"]
            );
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection error: " . $e->getMessage());
        }
    }
}
