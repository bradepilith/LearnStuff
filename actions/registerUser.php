<?php
    session_start();
    include_once '../classes/Database.php';
    include_once '../classes/User.php';

    # Get POST vars
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

    # Hash password
    $password_hashed = password_hash($password, PASSWORD_DEFAULT);

    # Create user and login
    $user = new User;
    if($user->create($name, $email, $password_hashed)) {
        $user->login($email, $password);
        header('Location: ../dashboard');
    } else {
        header('Location: ../index?code=1');
    }

