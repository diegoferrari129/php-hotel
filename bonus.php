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

    $filteredHotels = $hotels;
    
    if(isset($_GET['parking']) && $_GET['parking'] !=''){

        $filteredHotels = [];

        foreach($hotels as $item){
            if(in_array(true, array($item['parking']))) {

                $filteredHotels[] = $item;

            }
        }

    }

    if(isset($_GET['vote']) && $_GET['vote'] !=''){

        $filteredHotels = [];

        $vote = intval($_GET['vote']);

        foreach($hotels as $item){
            if(in_array($vote, array($item['vote']))) { 
                $filteredHotels[] = $item;
            }

        }

    }

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
    <form action="./bonus.php" method="get">
        <div class="container">
            <div class="row">
                <div class="col-12"> 

                    <h2 class="py-5 text-center">
                        Trova l'Hotel che fa per te !
                    </h2>

                        <div class="row">
                            <div class="col-4">
                                <h4 class="pb-2">Cerca in base alle tue esigenze</h4>
                                <div class="d-flex align-items-center mb-3">

                                    <span>Solo con Parcheggio</span>
                                    <input type="checkbox" name="parking" id="parking" class="ms-1 mt-1 me-4">

                                    <select name="vote" id="vote" class="p-1">
                                        <option value="">Voto</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                    
                                </div>

                                <button class="btn btn-success mb-5">Cerca</button>

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
                            <?php foreach ($filteredHotels as $hotel) { ?>
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