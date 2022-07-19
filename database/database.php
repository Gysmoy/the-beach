<?php

date_default_timezone_set("America/Lima");
// error_reporting(0);

class Database
{
    /* Declaring the variables that will be used in the class. */
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;
    public $connection;
    public $message;

    /**
     * It connects to the database.
     */
    public function __construct()
    
    {
        $this->host = 'localhost';
        $this->db = 'RECREOCAMPESTRE';
        $this->user = '';
        $this->password = '';
        $this->charset = '';
        $this->connection = $this -> connect();
        'Server=localhost;Database=master;Trusted_Connection=True;';
    }

    /**
     * It connects to the database
     * 
     * @return The connection to the database.
     */
    private function connect()
    {
        try {
            $connection = 'sqlsrv:Server=' . $this->host . ';';
            $connection .= 'Database=' . $this->db . ';';
            $connection .= '' . $this->charset;
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];
            $pdo = new PDO(
                $connection,
                $this->user,
                $this->password,
                $options
            );            

            $this->message = 'Conexión exitosa';
            return $pdo;
        } catch (PDOException $e) {
            $this->message = $e->getMessage();
            return false;
        }
    }

}