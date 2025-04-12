<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bookshelf - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Serif:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
    html, body {
        margin: 0;
        padding: 0;
        height: 100%;
    }
    body {
        background-image: url('assets/images/home.png');
        background-size: cover;
        background-position: center top -100px;
        background-repeat: no-repeat;
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
    .main-content {
        min-height: calc(100vh - 56px);
    }
    .browse-btn {
        margin-left: 17%;
        margin-top: 80px;
        align-self: flex-start;
        background-color: #ffffff;
        color: #000000;
        border: none;
    }
    .browse-btn:hover {
        background-color: #000;
        color: #fff;
    }

    @media (max-width: 768px) {
        .browse-btn {
            margin-left: auto;
            margin-right: auto;
            align-self: center;
        }
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
    <div class="container text-white d-flex flex-column justify-content-center main-content">
        <a href="index.php?page=browse" class="btn btn-light btn-lg browse-btn">Browse Books</a>
    </div>

</body>
</html>
