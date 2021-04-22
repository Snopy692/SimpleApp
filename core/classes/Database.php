<?php

namespace App\Core;
use PDO;

class Database {

	protected $connection;
	private $config;

    private function loadConfig($key='default') {
        $this->config=[
            'driver' => 'mysql',
            'host' => 'localhost',
            'dbname' => 'app',
            'username' => 'root',
            'password' => 'root'
        ];
    }

	public function __construct() {
        self::loadConfig();
        self::getPDOConnection();
	}

	private function getPDOConnection() {
        // Check if the connection is already established
        if ($this->connection == NULL) {
            // Create the connection
            $dsn = "" .
                $this->config['driver'] .
                ":host=" . $this->config['host'] .
                ";dbname=" . $this->config['dbname'];

            try {
                $this->connection = new PDO($dsn, $this->config['username'], $this->config['password']);
            } catch( PDOException $e ) {
                echo __LINE__.$e->getMessage();
            }
        }
    }

    public function getConnection() {
    	return $this->connection;
    }
}