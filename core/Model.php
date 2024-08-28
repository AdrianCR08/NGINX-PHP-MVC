<?php
class Model{
    public $db = null;
    function __construct()
    {
        try {
            $this->db = $this->getConnection();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    private function getConnection(){
        $host = "localhost";
        $user = "root";
        $pass = "4dm1n1str4d0r";
        $database = "mvc";
        $charset = "utf8";
        $opt = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
        $pdo = new pdo("mysql:host={$host};dbname={$database};charset={$charset}", $user, $pass, $opt);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
}