<?php
    $toDoList = [
        'Finire esercizio todo list',
        'Pulire casa',
        'Conquistare la pianura padana'
    ];

    header('Content-Type: application/json');
    echo json_encode($toDoList);
?>