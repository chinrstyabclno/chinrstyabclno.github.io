<!DOCTYPE html>
<html lang="en">
<head>
    <title>Browse Books</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap & Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Serif:wght@700&display=swap" rel="stylesheet">

    <!-- Custom Styles -->
    <style>
        body {
            background-color: #000;
            color: white;
        }

        .navbar {
            background-color: white !important;
        }

        .navbar-brand {
            font-family: 'Roboto Serif', serif;
            font-weight: bold;
            font-size: 1.5rem;
            color: black !important;
        }

        .navbar-brand:hover {
            color: black !important;
        }

        .btn-outline-light {
            color: black;
            border-color: black;
            background-color: white;
        }

        .btn-outline-light:hover {
            background-color: black;
            color: white;
            border-color: black;
        }

        .search-bar {
            max-width: 250px;
        }

        .card {
            background-color: #1c1c1c;
            border: 1px solid #444;
            color: white;
            box-shadow: 0 8px 16px rgba(255, 255, 255, 0.1);
            transition: transform 0.2s ease-in-out;
            width: 220px;
            margin: 0 auto;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card-img-top {
            height: 300px;
            width: 100%;
            object-fit: cover;
            border-bottom: 1px solid #444;
        }

        .card-body {
            padding: 1rem;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 170px;
        }

        .card-title {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        .row-cols-1 .col,
        .row-cols-md-3 .col {
            display: flex;
            justify-content: center;
        }

        .btn-primary {
            background-color: white;
            color: black;
            border: none;
        }

        .btn-primary:hover {
            background-color: black;
            color: white;
            border: 1px solid white;
        }
    </style>
</head>

<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg px-4">
    <a class="navbar-brand d-flex align-items-center" href="index.php?page=home">
        <img src="assets/images/logo.png" alt="Logo" style="height: 40px; margin-right: 10px;">
        Once Upon a Shelf
    </a>

    <div class="ms-auto d-flex">
        <a href="index.php?page=home" class="btn btn-outline-light me-3">Home</a>
        <form class="d-flex" action="view/book.php" method="get">
            <input class="form-control me-2 search-bar" type="search" name="genre" placeholder="Search Genre" aria-label="Search" required>
            <button class="btn btn-outline-light" type="submit">Search</button>
        </form>
    </div>
</nav>

<!-- Main Content -->
<div class="container my-5">
    <h2 class="text-center mb-4">Select a Genre</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php
            $genreImages = [
                'Fantasy' => 'fantasy.png',
                'Horror' => 'horror.jpg',
                'Mystery' => 'mystery.jpg',
                'Romance' => 'romance.jpg',
                'Sci-Fi' => 'scifi.jpg',
                'Self-Help' => 'sh.jpg'
            ];
        ?>

<?php foreach ($genres as $genre): ?>
    <div class="col">
        <div class="card h-100 text-center">
            <img src="assets/images/<?= $genreImages[$genre] ?? 'default.jpg' ?>" class="card-img-top" alt="<?= $genre ?> Cover">
            <div class="card-body">
                <h5 class="card-title"><?= htmlspecialchars($genre) ?></h5>
                <!-- View Details Button -->
                <a href="view/book.php?genre=<?= urlencode($genre) ?>" class="btn btn-primary">View Details</a>
            </div>
        </div>
    </div>
<?php endforeach; ?>

    </div>
</div>

</body>
</html>
