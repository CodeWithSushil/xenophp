<?php

declare(strict_types=1);

namespace App\Config;

use PDO;

class Database
{
    private string $host = '127.0.0.1';

    private string $db_name = 'xeno';

    private string $username = 'root';

    private string $password = '';

    public $conn;

    public function __construct()
    {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=$this->host;port=3306;dbname=$this->db_name;charset=utf8mb4;", $this->username, $this->password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->setAttribute(PDO::ATTR_EMULATE_PREPAPES, false);
            $this->conn->setAttribute(PDO::ATTR_STRINGIFY_FETCHES, false);
        } catch (PDOException $e) {
            echo 'Connection failed: '.$e->getMessage();
        }
    }

    public function fetchData($query, $params = [])
    {
        try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute($params);

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return false;
        }
    }

    public function fetchSingle($query)
    {
        $stmt = $this->conn->query($query);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
