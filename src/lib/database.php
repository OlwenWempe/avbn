<?php

namespace Application\Lib\Database;

class DatabaseConnection
{
    public ?\PDO $database = null;

    public function getConnection(): \PDO
    {
        if ($this->database === null) {
            $this->database = new \PDO('mysql:host=localhost;dbname=avbn_openclassroom;charset=utf8', 'olw9185en', 'Logan24092018@');
        }

        return $this->database;
    }
}