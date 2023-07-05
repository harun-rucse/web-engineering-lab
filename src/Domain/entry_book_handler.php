<?php 
    namespace Bookstore\Domain;

    $booksJson = file_get_contents('books.json');
    $books = json_decode($booksJson, true);

    $books[] = [
        'title' => $_POST['title'],
        'author' => $_POST['author'],
        'available' => $_POST['available'],
        'pages' => $_POST['pages'],
        'isbn' => $_POST['isbn']
    ];

    $booksJson = json_encode($books, JSON_PRETTY_PRINT);
    file_put_contents('books.json', $booksJson);
    header('Location: index.php');
