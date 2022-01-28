<?php

class Books extends Connection_DB
{
    public function getBooks()
    {
        $stmt = $this->connect()->query("SELECT * FROM books");
        while($row = $stmt->fetch()) {
            $uid = $row['uid'];
            return $uid;
        }
    }

    public function setBook($id, $name)
    {
        $stmt = $this->connect()->query("INSERT INTO `books` SET `id` = :id, `book` = :name");
        $stmt->execute(array('id' => $id, 'book' => $name));
        return $stmt;
    }
}

