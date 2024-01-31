<?php
require_once __DIR__ . '/Models/Movie.php';


    $movies = [
        new Movie('Aquaman e il regno perduto', [ 'Jason Momoa', 'Patrick Wilson', 'Amber Heard' ], 'La marea sta cambiando',
        'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/oPH2SpuemYM8225xya9oScUzUqZ.jpg'),
        new Movie('Wonka', [ 'Timothée Chalamet', 'Calah Lane', 'Keegan-Michael Key' ], 'Tutte le cose belle a questo mondo sono cominciate con un sogno.',
        'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/d81h1ux3kDgvX8z8hhrdRqJToog.jpg'),
        new Movie('Napoleon', [ 'Joaquin Phoenix', 'Vanessa Kirby', 'Rupert Everett' ], 'Ha conquistato tutto. Anche l\'eternità.',
        'https://cdn.cinematerial.com/p/297x/yiyp6hpe/on-fire-movie-poster-md.jpg?v=1691599578'),
        new Movie('Povere creature!', [ 'Emma Stone', 'Mark Ruffalo', 'Willem Dafoe' ], 'Lei non somiglia a niente che tu conosca.',
        'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/kpyN3APxvVaNsnzoeozB7Wt439m.jpg'),
        new Movie('Dune', [ 'Timothée Chalamet', 'Rebecca Ferguson', 'Oscar Isaac' ], 'L\'inizio di un viaggio straordinario',
        'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/a4DiBbHqXg91YQ8SLGL8otVqeOa.jpg'),
        new Movie('Ex Machina', [ 'Domhnall Gleeson', 'Alicia Vikander', 'Oscar Isaac' ], 'Non c\'è niente di più umano della voglia di sopravvivere',
        'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/qRFWr87YE1ENrmW8iEoHfcNjaPz.jpg'),
    ];
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>OOP 1</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="./stylesheets/style.css">

</head>
<body class="bg-primary-subtle">
    <header class="container">
        <div class="row text-center mb-3 p-3">
            <div class="col-12">
                <h1>
                    PHP Object Oriented Movies
                </h1>
            </div>
        </div>
    </header>
    <main class="container">
        <section class="row">
            <?php foreach ($movies as $movie) { ?>
                <div class="col-4 mb-4">
                    <div class="card">
                        <img src="<?php echo $movie->imageUrl; ?>" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <h5 class="card-title py-2 fw-bold fs-3">
                                <?php
                                    echo $movie->getTitle();
                                ?>
                            </h5>
                            <h6 class="card-subtitle">
                                <?php echo implode(', ', $movie->getAuthors()); ?>
                            </h6>
                            <p class="card-text">
                                <?php echo $movie->description; ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </section>
    </main>
</body>
</html>