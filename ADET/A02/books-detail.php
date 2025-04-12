<?php

$bookDetails = [
    'Fantasy Book 1' => [
        'description' => 'Description of Fantasy Book 1...',
        'author' => 'Author Name',
        'image' => 'fantasy-book1.jpg',
    ],
];

// Get the book title from the URL
$bookTitle = $_GET['book'] ?? null;

if (!$bookTitle || !array_key_exists($bookTitle, $bookDetails)) {
    echo "Book not found!";
    exit;
}

$book = $bookDetails[$bookTitle];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= htmlspecialchars($bookTitle) ?> - Book Details</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include Bootstrap and Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg px-4">
    <a class="navbar-brand d-flex align-items-center" href="index.php?page=home">
        <img src="assets/images/logo.png" alt="Logo" style="height: 40px; margin-right: 10px;">
        Once Upon a Shelf
    </a>
    <div class="ms-auto">
        <a href="index.php?page=home" class="btn btn-outline-light me-3">Home</a>
    </div>
</nav>

<!-- Book Details -->
<div class="container my-5">
    <h2 class="text-center mb-4"><?= htmlspecialchars($bookTitle) ?></h2>
    <div class="row">
        <div class="col-md-4">
            <img src="assets/images/<?= $book['image'] ?>" class="img-fluid" alt="<?= htmlspecialchars($bookTitle) ?> Cover">
        </div>
        <div class="col-md-8">
            <h4>Author: <?= htmlspecialchars($book['author']) ?></h4>
            <p><?= htmlspecialchars($book['description']) ?></p>
        </div>
    </div>
</div>

</body>
</html>
