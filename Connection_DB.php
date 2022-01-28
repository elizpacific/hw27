<?php

class Connection_DB
{
    public function connect() {
        try {
            $db = new PDO('mysql:dbname=test;host=mysql;port=3306', "root", "root");
        } catch (PDOException $e) {
            die($e->getMessage());
        }
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
        return $db;
    }

}