<?php
    $toDoList = [
        'Finire esercizio todo list',
        'Pulire casa',
        'Conquistare la pianura padana'
    ];

    if (isset($_POST['task'])) {
        $toDoList[] = $_POST['task'];
    }

    header('Content-Type: application/json');
    echo json_encode($toDoList);
?>