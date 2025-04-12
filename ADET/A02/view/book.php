<?php
// book.php
$genre = ucwords(strtolower($_GET['genre'] ?? ''));

// Check if genre is valid
if (empty($genre)) {
    echo "Genre not found!";
    exit;
}

// Define books for each genre
$books = [
    'Fantasy' => [
        ['title' => 'The Name of the Wind', 'image' => '../assets/images/fantasy1.jpg'],
        ['title' => 'The Hobbit', 'image' => '../assets/images/fantasy2.jpg'],
        ['title' => 'The Lies of Locke Lamora', 'image' => '../assets/images/fantasy3.png'],
        ['title' => 'The Priory of the Orange Tree', 'image' => '../assets/images/fantasy4.jpg'],
        ['title' => 'Harry Potter and the Sorcerer s Stone', 'image' => '../assets/images/fantasy5.jpg'],
        ['title' => 'The Blade Itself', 'image' => '../assets/images/fantasy6.avif'],
        ['title' => 'The Way of Kings', 'image' => '../assets/images/fantasy7.jpg'],
        ['title' => 'Uprooted', 'image' => '../assets/images/fantasy8.jpg'],
        ['title' => 'The Dark Tower: The Gunslinger', 'image' => '../assets/images/fantasy9.jpg'],
        ['title' => 'The Chronicles of Narnia', 'image' => '../assets/images/fantasy10.jpg'],
        ['title' => 'Neverwhere', 'image' => '../assets/images/fantasy12.jpg'],
        ['title' => 'Alice’s Adventures in Wonderland', 'image' => '../assets/images/fantasy13.jpg'],
        ['title' => 'A Wizard of Earthsea', 'image' => '../assets/images/fantasy14.webp'],
        ['title' => 'Assassin’s Apprentice ', 'image' => '../assets/images/fantasy15.webp'],
        ['title' => 'The Night Circus', 'image' => '../assets/images/fantasy11.webp'],
        ['title' => 'The Lost Hero ', 'image' => '../assets/images/fantasy16.webp']
    ],
    'Horror' => [
        ['title' => 'The Exorcist', 'image' => '../assets/images/horror1.jpg'],
        ['title' => 'IT', 'image' => '../assets/images/horror2.jpg'],
        ['title' => 'The Haunted Mirror', 'image' => '../assets/images/horror3.jpg'],
        ['title' => 'Carrion Comfort', 'image' => '../assets/images/horror4.jpg'],
        ['title' => 'From Hell', 'image' => '../assets/images/horror5.jpg'],
        ['title' => 'Frankenstein', 'image' => '../assets/images/horror6.jpg'],
        ['title' => 'Psycho', 'image' => '../assets/images/horror7.jpg'],
        ['title' => 'Hell House', 'image' => '../assets/images/horror8.jpg'],
        ['title' => 'The Six-Gun Tarot', 'image' => '../assets/images/horror9.jpg'],
        ['title' => 'The Lesser Dead', 'image' => '../assets/images/horror10.jpg'],
        ['title' => 'Shutter', 'image' => '../assets/images/horror11.jpg'],
        ['title' => 'We Have Always Lived in the Castle', 'image' => '../assets/images/horror12.jpg'],
        ['title' => 'They Bloom at Night', 'image' => '../assets/images/horror13.jpg'],
        ['title' => 'The Night Birds', 'image' => '../assets/images/horror14.jpg'],
        ['title' => 'The Haunting of Room 904', 'image' => '../assets/images/horror15.jpg'],
        ['title' => 'I Am Made of Death', 'image' => '../assets/images/horror16.jpg']
    ],
    'Romance' => [
        ['title' => 'Love in Paris', 'image' => '../assets/images/romance1.jpg'],
        ['title' => 'Twilight', 'image' => '../assets/images/romance2.jpg'],
        ['title' => 'Letters to Juliet', 'image' => '../assets/images/romance3.jpg'],
        ['title' => 'The Love Hypothesis', 'image' => '../assets/images/romance4.jpg'],
        ['title' => 'It Ends With Us', 'image' => '../assets/images/romance5.jpg'],
        ['title' => 'Beach Read', 'image' => '../assets/images/romance6.jpg'],
        ['title' => 'People We Meet on Vacation', 'image' => '../assets/images/romance7.jpg'],
        ['title' => 'A Court of Thorns and Roses', 'image' => '../assets/images/romance8.jpg'],
        ['title' => 'The Hating Game', 'image' => '../assets/images/romance9.jpg'],
        ['title' => 'Twisted Love', 'image' => '../assets/images/romance10.jpg'],
        ['title' => 'A Million Kisses in Your Lifetime', 'image' => '../assets/images/romance11.jpg'],
        ['title' => 'Every Summer After', 'image' => '../assets/images/romance12.jpg'],
        ['title' => 'Eleanor & Park', 'image' => '../assets/images/romance13.jpg'],
        ['title' => 'The Wedding People', 'image' => '../assets/images/romance14.jpg'],
        ['title' => 'Better Than the Movies', 'image' => '../assets/images/romance15.jpg'],
        ['title' => 'Yours Truly ', 'image' => '../assets/images/romance16.jpg']
    ],
    'Sci-Fi' => [
        ['title' => 'The Hunger Games', 'image' => '../assets/images/scifi1.jpg'],
        ['title' => 'Dune', 'image' => '../assets/images/scifi2.jpg'],
        ['title' => '1984', 'image' => '../assets/images/scifi3.jpg'],
        ['title' => 'Brave New World', 'image' => '../assets/images/scifi4.jpg'],
        ['title' => 'The Martian', 'image' => '../assets/images/scifi5.webp'],
        ['title' => 'Recursion', 'image' => '../assets/images/scifi6.jpg'],
        ['title' => 'Dark Matter', 'image' => '../assets/images/scifi7.jpg'],
        ['title' => 'Snow Crash', 'image' => '../assets/images/scifi8.jpg'],
        ['title' => 'These Broken Stars', 'image' => '../assets/images/scifi9.webp'],
        ['title' => 'The 5th Wave', 'image' => '../assets/images/scifi10.jpg'],
        ['title' => 'Station Eleven', 'image' => '../assets/images/scifi11.jpg'],
        ['title' => 'Aurora Rising', 'image' => '../assets/images/scifi12.jpg'],
        ['title' => '2001: A Space Odyssey', 'image' => '../assets/images/scifi13.jpg'],
        ['title' => 'Stranger in a Strange Land', 'image' => '../assets/images/scifi14.webp'],
        ['title' => 'The Forever War', 'image' => '../assets/images/scifi15.jpg'],
        ['title' => 'Starship Troopers', 'image' => '../assets/images/scifi16.jpg']
    ],
    'Self-Help' => [
        ['title' => 'Atomic Habits', 'image' => '../assets/images/sh1.webp'],
        ['title' => 'Thinking Fast and Slow', 'image' => '../assets/images/sh2.webp'],
        ['title' => 'he 7 Habits of Highly Effective People', 'image' => '../assets/images/sh3.jpg'],
        ['title' => 'The Subtle Art of Not Giving a F*ck', 'image' => '../assets/images/sh4.jpeg'],
        ['title' => 'You Are a Badass', 'image' => '../assets/images/sh5.jpg'],
        ['title' => 'It’s OK That You’re Not OK', 'image' => '../assets/images/sh6.jpg'],
        ['title' => 'What Happened to You?', 'image' => '../assets/images/sh7.jpg'],
        ['title' => 'Deep Work', 'image' => '../assets/images/sh8.jpeg'],
        ['title' => 'Essentialism', 'image' => '../assets/images/sh9.jpg'],
        ['title' => 'Emotional Intelligence', 'image' => '../assets/images/sh10.jpg'],
        ['title' => 'Start With Why', 'image' => '../assets/images/sh11.jpg'],
        ['title' => 'The One Thing', 'image' => '../assets/images/sh12.jpg'],
        ['title' => 'Think and Grow Rich', 'image' => '../assets/images/sh13.jpg'],
        ['title' => 'The Alchemist', 'image' => '../assets/images/sh14.jpg'],
        ['title' => 'Games People Play', 'image' => '../assets/images/sh15.jpg'],
        ['title' => 'Outliers: The Story of Success', 'image' => '../assets/images/sh16.jpg']
    ],
    'Mystery' => [
        ['title' => 'In Cold Blood', 'image' => '../assets/images/mystery1.jpg'],
        ['title' => 'Woman in White', 'image' => '../assets/images/mystery2.jpg'],
        ['title' => 'The Da Vinci Code', 'image' => '../assets/images/mystery3.jpg'],
        ['title' => 'My Sister, the Serial Killer', 'image' => '../assets/images/mystery4.jpg'],
        ['title' => 'The Detective', 'image' => '../assets/images/mystery5.jpg'],
        ['title' => 'Killing Floor', 'image' => '../assets/images/mystery6.jpg'],
        ['title' => 'The Alienist', 'image' => '../assets/images/mystery7.jpg'],
        ['title' => 'Eye of the Needle', 'image' => '../assets/images/mystery8.jpg'],
        ['title' => 'The Silence of the Lambs', 'image' => '../assets/images/mystery9.jpg'],
        ['title' => 'The Maltese Falcon', 'image' => '../assets/images/mystery10.jpg'],
        ['title' => 'Tinker, Tailor, Soldier, Spy', 'image' => '../assets/images/mystery11.jpg'],
        ['title' => 'The Postman Always Rings Twice', 'image' => '../assets/images/mystery12.jpg'],
        ['title' => 'Retreat', 'image' => '../assets/images/mystery13.jpg'],
        ['title' => 'Kills Well with Others', 'image' => '../assets/images/mystery14.jpg'],
        ['title' => 'We Were Warned', 'image' => '../assets/images/mystery15.jpg'],
        ['title' => 'Murder at Gulls Nest', 'image' => '../assets/images/mystery16.jpg']
    ]
];

$genre = $_GET['genre'] ?? 'Fiction'; // default to Fiction if not set

// Check kung valid ang genre
if (!isset($books[$genre])) {
    echo "Genre not found.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Book Details - <?= htmlspecialchars($genre) ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap & Google Font -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Serif:wght@700&display=swap" rel="stylesheet">

    <style>
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
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

        .book-card {
            perspective: 1000px;
        }

        .book-inner {
            background-color: #1e1e1e;
            border: 1px solid #444;
            border-radius: 5px;
            box-shadow: 5px 5px 15px rgba(0,0,0,0.5);
            transition: transform 0.3s;
            transform-style: preserve-3d;
            padding: 10px;
            position: relative;
            min-height: 390px;
        }

        .book-inner:hover {
            transform: rotateY(-5deg);
        }

        .book-inner::before {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 10px;
            background: #444;
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
        }

        .book-img {
            height: 400px;
            object-fit: cover;
            width: 100%;
            border-radius: 4px;
        }

        .card-title {
            margin-top: 10px;
            font-size: 1rem;
        }
    </style>
</head>

<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg px-4">
    <a class="navbar-brand d-flex align-items-center" href="/A02/index.php?page=home">
        <img src="/A02/assets/images/logo.png" alt="Logo" style="height: 40px; margin-right: 10px;">
        Once Upon a Shelf
    </a>
    <div class="ms-auto d-flex">
        <a href="/A02/index.php?page=home" class="btn btn-outline-light me-3">Home</a>
        <form class="d-flex" action="/A02/index.php" method="get">
            <input class="form-control me-2 search-bar" type="search" name="genre" placeholder="Search Genre" aria-label="Search">
            <input type="hidden" name="page" value="browse">
            <button class="btn btn-outline-light" type="submit">Search</button>
        </form>
    </div>
</nav>

<!-- Book Grid -->
<div class="container mt-4">
    <h2 class="text-center mb-4"><?= htmlspecialchars($genre) ?> Books</h2>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
        <?php foreach ($books[$genre] as $book): ?>
            <div class="col">
                <div class="book-card">
                    <div class="book-inner p-2">
                        <img src="<?= htmlspecialchars($book['image']) ?>" alt="<?= htmlspecialchars($book['title']) ?>" class="book-img img-fluid">
                        <h5 class="card-title text-center mt-2"><?= htmlspecialchars($book['title']) ?></h5>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
