<?php
    class ExtraCourse {
        private $db;
        private $day;
        private $start_time;
        private $end_time;
        private $weeks;
        private $cost;

        public function __construct() {
            $this->db = new Database;
        }

        public function create($day, $start_time, $end_time, $weeks) {

            # Hourly cost
            $hour_cost = 1.5;

            # Work out time difference
            $time1 = strtotime($start_time.':00');
            $time2 = strtotime($end_time.':00');
            $hour_difference = round(abs($time2 - $time1) / 3600,2);

            # Cost per hour
            $cost = $hour_cost * $hour_difference;

            # Work out overall cost for the amount of weeks
            $overall_cost = $cost * $weeks;
            $this->cost = $overall_cost;

            $this->start_time = $start_time;
            $this->end_time = $end_time;
            $this->weeks = $weeks;
            $this->day = $day;

            # Insert
            $this->db->query('INSERT INTO extra_courses (uid, day, start_time, end_time, weeks, cost) VALUES (:uid, :day, :start_time, :end_time, :weeks, :cost)');
            $this->db->bind(':uid', $_SESSION['uid']);
            $this->db->bind(':start_time', $start_time);
            $this->db->bind(':end_time', $end_time);
            $this->db->bind(':cost', $this->cost);
            $this->db->bind(':weeks', $this->weeks);
            $this->db->bind(':day', $this->day);

            return $this->db->execute();
        }

        public function getCoursesByUser($uid) {
            $this->db->query('SELECT * FROM extra_courses WHERE uid = :uid');
            $this->db->bind(':uid', $uid);
            return $this->db->resultSet();
        }
    }