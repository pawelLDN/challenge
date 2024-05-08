<?php
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $action = $_GET['action'];
    $output = $_GET['output'];

    if(!$action) {
        $action = 'login';
    }

    if(!$output) {
        $output = 'html';
    }

    switch($action) {
        case 'login';
            $_SESSION['login'] = $username;
            break;
        case 'logout':
            unset($_SESSION['login']);
            header('Location: /');
            exit();
    }

    switch($output) {
        case 'json':
            echo json_encode(array('username' => $username, 'body' => 'Welcome to dashboard', 'success' => true));
            break;
        default:
        case 'html':
        header('Location: dashboard.php');
        exit();
    }