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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>phphotel</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <form action="bonus.php" method="get">
        <div class="container">
            <div class="row">
                <div class="col-12"> 

                    <h2 class="py-5 text-center">
                        Trova l'Hotel che fa per te !
                    </h2>

                        <div class="row">
                            <div class="col-4">
                                <div class="d-flex mb-3">

                                    <select name="parking" id="parking">
                                        <option value="">Filtra</option>
                                        <option value="0">Con parcheggio</option>
                                    </select>
                                    <button class="btn btn-success ms-3">Cerca</button>

                                </div>
                            </div>

                        </div>
                        
                        
                    </div>
                    
                    <div class="col-12">
                        
                        <table class="table table-striped">
                            <tr>
                                <th class="col-3">
                                    Nome
                                </th>
                                
                                <th class="col-5">
                                    Descrizione
                                </th>
                                
                                <th class="col-2">
                                    Voto
                                </th>
                                
                                <th class="col-2">
                                    Distanza
                                </th>
                            </tr>
                            <?php foreach ($hotels as $hotel) { ?>
                                <tr>
                                    <td class="col-3">
                                        <?php echo $hotel['name']; ?>
                                    </td>
                                    
                                    <td class="col-5">
                                        <?php echo $hotel['description']; ?>
                                    </td>
                                    
                                    <td class="col-2">
                                        <?php echo $hotel['vote']; ?>
                                    </td>
                                    
                                    <td class="col-2">
                                        <?php echo $hotel['distance_to_center']; ?>
                                    </td>
                                </tr>
                                <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>
            </form>
        </body>
        </html>