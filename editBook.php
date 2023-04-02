<?php

require_once __DIR__ . '/vendor/autoload.php';

use Bookstore\Domain\Book;

$bookObject = new Book();

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = $_GET['id'];
    $book = $bookObject->getBook($id);

    $loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/views');
    $twig = new \Twig\Environment($loader);
    $template = $twig->load('books/editBook.twig');
    echo $template->render(['book' => $book]);
} else {
    $id = $_POST['id'];
    $isbn = $_POST['isbn'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $stock = $_POST['stock'];
    $price = $_POST['price'];

    $bookObject->updateBook($id, [
        'isbn' => $isbn,
        'title' => $title,
        'author' => $author,
        'stock' => $stock,
        'price' => $price
    ]);
    // redirect to the books page
    header('Location: index.php');
}