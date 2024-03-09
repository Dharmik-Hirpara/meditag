<?php

class Connection_Lib {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "meditag";
    public $conn;

    public function __construct() {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function Connection()
    {
        return $this->conn;
    }
}

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "meditag";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);

// if ($conn->connect_error) 
// {
//     die( "Connection failed: " . $conn->connect_error);
// }
// else
// {
//     echo "success";
// }
?>
