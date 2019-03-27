<?php
    session_start();
    include_once '../classes/Database.php';
    include_once '../classes/User.php';
    include_once '../classes/Course.php';

    # Get POST vars
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $uid = $_SESSION['uid'];

    # Create course
    $course = new Course;
    $course->create($start_date, $end_date);

    header('Location: ../dashboard');
