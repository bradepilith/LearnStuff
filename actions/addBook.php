<?php
    session_start();
    include_once '../classes/Database.php';
    include_once '../classes/User.php';
    include_once '../classes/Book.php';

    # Get POST vars
    $amount = $_POST['amount'];

    # Create course
    $course = new Book;
    $course->create($amount);

    header('Location: ../dashboard');
