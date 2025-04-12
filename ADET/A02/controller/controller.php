<?php
require_once 'model/model.php';

class Controller {
    public function handleRequest($page) {
        $model = new Model();

        switch($page) {
            case 'browse':
                $genres = $model->getGenres();
                include 'view/browse.php';
                break;
            case 'read':
                $book = $_GET['book'] ?? 'sample-book.html';
                include 'view/reader.php';
                break;
            case 'book':  
                $bookTitle = $_GET['book'] ?? 'Sample Book';
                $bookDetails = $model->getBookDetails($bookTitle);
                include 'view/book.php';
                break;
            case 'home':
            default:
                include 'view/home.php';
        }
    }
}


