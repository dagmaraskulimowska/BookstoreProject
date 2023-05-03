<?php

class connection 
{
    protected $database;
    
    public function __construct()
    {
        $this->database = new mysqli("localhost", "root", "", "bookstore");
        if ($this->database->connect_errno) {
            echo "Failed to connect to MySQL: " . $this->database->connect_error;
            exit();
        }
    }

    public function getDatabase() {
        return $this->database;
    }

}
