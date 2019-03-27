<?php
    session_start();
    include_once '../classes/Database.php';
    include_once '../classes/User.php';

    # Get POST vars
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

    # Create user and login
    $user = new User;
    if($user->login($email, $password)) {
        header('Location: ../dashboard');
    } else {
        header('Location: ../index?code=2');
    }