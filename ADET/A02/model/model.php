<?php

class Model {
    public function getGenres() {
        return [
            'Fantasy', 'Sci-Fi', 'Mystery', 'Romance', 'Horror', 'Self-Help'
        ];
    }

    public function getBooksByGenre($genre) {
        $books = [
            'Fantasy' => ['Harry Potter', 'The Hobbit'],
            'Sci-Fi' => ['Dune', 'Ender\'s Game'],
            'Mystery' => ['Sherlock Holmes', 'Gone Girl'],
            'Romance' => ['Pride and Prejudice', 'Twilight'],
            'Horror' => ['It', 'The Shining'],
            'Self-Help' => ['Sapiens', 'Educated']
        ];
        return $books[$genre] ?? [];
    }

    // Add a method for retrieving book details
    public function getBookDetails($bookTitle) {
        $bookDetails = [
            'Harry Potter' => [
                'author' => 'J.K. Rowling',
                'description' => 'A young wizard embarks on magical adventures.',
                'cover' => 'assets/images/harry-potter.jpg',
            ],
            'The Hobbit' => [
                'author' => 'J.R.R. Tolkien',
                'description' => 'Bilbo Baggins goes on an epic quest with dwarves.',
                'cover' => 'assets/images/the-hobbit.jpg',
            ],
            // Add other books here...
        ];

        return $bookDetails[$bookTitle] ?? [];
    }
}
