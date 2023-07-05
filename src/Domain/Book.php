<?php

namespace Bookstore\Domain;

use Bookstore\Utils\Database;

class Book
{
    public $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->connect();
    }

    public function getAllBooks()
    {
        return  $this->db->query('SELECT * FROM book ORDER BY id');
    }

    public function getBook($id)
    {
        $statement = $this->db->prepare('SELECT * FROM book WHERE id = :id');
        $statement->execute(['id' => $id]);
        return $statement->fetch();
    }

    public function createBook($data)
    {
        $statement = $this->db->prepare('INSERT INTO book (isbn,title, author,stock, price) VALUES (:isbn, :title, :author, :stock, :price)');
        $statement->execute([
            'isbn' => $data['isbn'],
            'title' => $data['title'],
            'author' => $data['author'],
            'stock' => $data['stock'],
            'price' => $data['price']
        ]);
    }

    public function updateBook($id, $data)
    {
        $statement = $this->db->prepare('UPDATE book SET isbn = :isbn, title = :title, author = :author, stock = :stock, price = :price WHERE id = :id');
        $statement->execute([
            'isbn' => $data['isbn'],
            'title' => $data['title'],
            'author' => $data['author'],
            'stock' => $data['stock'],
            'price' => $data['price'],
            'id' => $id
        ]);
    }

    public function searchBook($search)
    {
        $statement = $this->db->prepare('SELECT * FROM book WHERE title LIKE :search OR author LIKE :search');
        $statement->execute(['search' => '%' . $search . '%']);
        return $statement->fetchAll();
    }

    public function deleteBook($id)
    {
        $statement = $this->db->prepare('DELETE FROM book WHERE id = :id');
        $statement->execute(['id' => $id]);
    }
}
