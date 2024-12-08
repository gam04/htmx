<?php

session_start();

    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        echo '<span>error</span>';
        http_response_code(400);
        exit(0);
    }
    $_SESSION['todo'][$_POST['taskname']] = [
        'name' => $_POST['taskname'],
        'description' => $_POST['description'],
        'date' => $_POST['date'],
        'done' => boolval($_POST['done']?? false)
    ];
    
?>