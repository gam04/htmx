<?php

session_start();

    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        echo '<span>error</span>';
        http_response_code(400);
        exit(0);
    }

    if (!isset($_SESSION['todo'][$_POST['taskname']])) {
        echo '<span>error</span>';
        http_response_code(400);
        exit(0);
    }

    if (!isset($_POST['taskname'])) {
        echo '<span>error</span>';
        http_response_code(400);
        exit(0);
    }


    $_SESSION['todo'][$_POST['taskname']]['done'] = boolval($_POST['done']?? false);
    
?>