<?php
    
    $string = file_get_contents('tasksDatabase.json');
    $toDoList = json_decode($string, true);

    if (isset($_POST['task'])) {
        $toDoList[] = $_POST['task'];

        $myTasks = json_encode($toDoList);
        file_put_contents('tasksDatabase.json', $myTasks);
    }

    header('Content-Type: application/json');
    echo json_encode($toDoList);
?>