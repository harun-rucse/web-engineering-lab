<?php
require_once __DIR__ . '/vendor/autoload.php';

use Bookstore\Domain\Book;

$book = new Book();
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/views');
    $twig = new \Twig\Environment($loader);
    $template = $twig->load('books/addBook.twig');
    echo $template->render();
} else {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $isbn = $_POST['isbn'];
    $stock = $_POST['stock'];
    $price = $_POST['price'];

    $book->createBook([
        'title' => $title,
        'author' => $author,
        'isbn' => $isbn,
        'stock' => $stock,
        'price' => $price
    ]);

    // redirect to the books page
    header('Location: index.php');
}
