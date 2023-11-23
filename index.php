<?php

$has_parking = isset($_GET['has_parking']);

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

$hotelNames = [];
$hotelDescriptions = [];
$hotelParkings= [];
$hotelVotes= [];
$centerDistances = [];

foreach ($hotels as $hotel) {
    array_push($hotelNames, $hotel['name']);
    // var_dump($hotelNames);
    array_push($hotelDescriptions, $hotel['description']);
    // var_dump($hotelDescriptions);
    array_push($hotelParkings, $hotel['parking']);
    // var_dump($hotelParkings);
    array_push($hotelVotes, $hotel['vote']);
    // var_dump($hotelVotes);
    array_push($centerDistances, $hotel['distance_to_center']);
    // var_dump($centerDistances);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/master.css">
    <title>Hotels</title>
</head>
<body>
    <div class="app">
        <div class="container pb-3">
            <div class="row">
                <form class="d-flex  gap-3" action="index.php" method="get">
                    <label for="has_parking"><strong>Vorresti gli Hotels con almeno un parcheggio ?</strong></label>
                    <input type="checkbox" value="1" name="has_parking" id="has_parking">
                    <button type="submit" value="filter">Ricerca</button>
                </form>
            </div>
        </div>
        <div class="container">
            <div class="row gy-3">
                <?php for ($i = 0; $i < count($hotels); $i++) { 
                    if($hotels[$i]['parking'] === $has_parking || !$has_parking) {
                ?>
                    <div class="col-3">
                        <div class="card">
                            <ul>
                                <li><strong>Nome: </strong><?php echo $hotels[$i]['name'] ?></li>
                                <li><strong>Descrizione: </strong><?php echo $hotels[$i]['description'] ?></li>
                                <li><strong>Parcheggio: </strong><?php echo ($hotels[$i]['parking'] == true) ? 'Parcheggio Disponibile' : 'Nessun Parcheggio' ?></li>
                                <li><strong>Voto Recensioni: </strong><?php echo $hotels[$i]['vote'] ?></li>
                                <li><strong>Distanza dal Centro: </strong><?php echo $hotels[$i] ['distance_to_center'] ?> Km</li>
                            </ul>
                        </div>
                    </div>
                <?php 
                } 
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>