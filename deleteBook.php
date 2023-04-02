<?php

require_once __DIR__ . '/vendor/autoload.php';

use Bookstore\Domain\Book;

$book = new Book();

$id = $_POST['id'];
$book->deleteBook($id);

// redirect to the books page
header('Location: index.php');