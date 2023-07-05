<?php
require_once __DIR__ . '/vendor/autoload.php';

use Bookstore\Utils\Database;
use Dompdf\Dompdf;

$instance = Database::getInstance();
$db = $instance->connect();

$books = $db->query('SELECT * FROM book ORDER BY id');

$html = <<<TABLE
    <!doctype html>
    <html lang="en">
    <head>
        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
                border-color: #dee2e6;
                border-spacing: 2px;
            }
            
            td, th {
                border: 1px solid #dee2e6;
                text-align: left;
                padding: 12px;
            }
            
            tr:nth-child(even) {
                background-color: #f2f2f2;
            }
        </style>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Stock</th>
                    <th>ISBN</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>   
    TABLE;

foreach ($books as $book) {
    $html .= '<tr>' .
        '<td>' . $book['id'] . '</td>' .
        '<td>' . $book['title'] . '</td>' .
        '<td>' . $book['author'] . '</td>' .
        '<td>' . $book['stock'] . '</td>' .
        '<td>' . $book['isbn'] . '</td>' .
        '<td>' . $book['price'] . '</td>' .
        '</tr>';
}

$html .= <<<TBODY
        </tbody>
        </table>
        </body>
        </html>
    TBODY;

$dompdf = new DOMPDF();
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$dompdf->stream("booklist.pdf", array("Attachment" => 0));
