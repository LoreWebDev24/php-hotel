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
    
    $hotelName = '';
    $hotelDescription = '';
    $hotelParking= '';
    $hotelVote= '';
    $centerDistance = '';

    foreach ($hotels as $hotel) {
        $hotelName .= $hotel['name'].' ';
        var_dump($hotelName);
        $hotelDescription .= $hotel['description'];
        var_dump($hotelDescription);
        $hotelParking .=$hotel['parking'];
        var_dump($hotelParking);
        $hotelVote .= $hotel['vote'];
        var_dump($hotelVote);
        $centerDistance .= $hotel['distance_to_center'];
        var_dump($centerDistance);
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
    <div class="container">
        <div class="row">
            <div class="col-2">
                <?php echo $hotelName ?>
            </div>
        </div>
        <p>
        </p>
    </div>
</body>
</html>