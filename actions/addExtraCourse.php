<?php
    session_start();
    include_once '../classes/Database.php';
    include_once '../classes/User.php';
    include_once '../classes/ExtraCourse.php';

    # Get POST vars
    $start_time = $_POST['start_time'];
    $end_time = $_POST['end_time'];
    $day = $_POST['day'];
    $weeks = $_POST['weeks'];
    $cost = $_POST['cost'];
    $uid = $_SESSION['uid'];

    # Create course
    $course = new ExtraCourse;
    $course->create($day, $start_time, $end_time, $weeks);

    header('Location: ../dashboard');
