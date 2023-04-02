<?php
require_once __DIR__ . '/vendor/autoload.php';

use Bookstore\Domain\Book;

$book = new Book();
$books = $book->getAllBooks();

// check if the search form is submitted
if (isset($_GET['search'])) {
    $search = $_GET['search'];

    $books = $book->searchBook($search);
}


$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/views');
$twig = new \Twig\Environment($loader);
$template = $twig->load('books/books.twig');
echo $template->render(['books' => $books, 'search' => $search ?? '']);