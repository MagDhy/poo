<?php

/**
 * Class DataBase
 * Permet de se connecter à une base de donnée
 */

class DataBase{
    private $host;
    private $dbName;
    private $user;
    private $passwd;

    public function __constructor($host, $dbName, $user, $passwd){
        $this->host = $host;
        $this->dbName = $dbName;
        $this->user = $user;
        $this->passwd = $passwd;
    }

    public function connexion($host, $dbName, $user, $passwd){
        try {
            $strConnection = 'mysql:host=' . $host . ';dbname=' . $dbName;
            $arrExtraParam = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
            $pdo = new PDO($strConnection, $user, $passwd, $arrExtraParam);
            $pdo = setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        }
        catch(PDOException $e) {
            $msg = 'ERREUR PDO dans ' . $e->getFile() . 'L.' . $e->getLine() . ' : ' . $e->getMessage();
            die($msg);
        }
    }
}
?>