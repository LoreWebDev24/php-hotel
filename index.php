<?php

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
        var_dump($hotelNames);
        array_push($hotelDescriptions, $hotel['description']);
        var_dump($hotelDescriptions);
        array_push($hotelParkings, $hotel['parking']);
        var_dump($hotelParkings);
        array_push($hotelVotes, $hotel['vote']);
        var_dump($hotelVotes);
        array_push($centerDistances, $hotel['distance_to_center']);
        var_dump($centerDistances);
      }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Hotels</title>
</head>
<body>
    <!-- <div class="container">
        <div class="row">
            <div class="col-2">
                <?php echo $hotelNames ?>
            </div>
            <div class="col-2">
                <?php echo $hotelDescriptions ?>
            </div>
            <div class="col-2">
                <?php echo $hotelParkings ?>
            </div>
            <div class="col-2">
                <?php echo $hotelVotes ?>
            </div>
            <div class="col-2">
                <?php echo $centerDistances ?>
            </div>
        </div> -->
        <p>
        </p>
    </div>
</body>
</html>