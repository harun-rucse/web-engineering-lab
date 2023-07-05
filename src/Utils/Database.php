<?php

namespace Bookstore\Utils;

use Bookstore\Utils\Config;
use PDO;

class Database
{
    private static $instance;
    private $dbConfig;

    private function __construct()
    {
        $this->dbConfig = Config::getInstance()->get('db');
    }

    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function connect()
    {
        $database = $this->dbConfig['database'];
        $user = $this->dbConfig['user'];
        $password = $this->dbConfig['password'];

        $db = new PDO(
            "mysql:host=127.0.0.1;dbname=" . $database,
            $user,
            $password
        );

        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $db;
    }
}
