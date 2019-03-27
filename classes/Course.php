<?php
    class Course {
        private $db;
        private $start_date;
        private $end_date;
        private $cost;
        private $days;

        public function __construct() {
            $this->db = new Database;
        }

        public function create($start_date, $end_date) {
            $start = strtotime($start_date);
            $end   = strtotime($end_date);
            $day_count = 0;

            # Count days without weekends
            while(date('Y-m-d', $start) < date('Y-m-d', $end)){
                $day_count += date('N', $start) < 6 ? 1 : 0;
                $start = strtotime("+1 day", $start);
            }

            # Daily cost
            $day_cost = 5;

            $this->cost = $day_cost * $day_count;
            $this->days = $day_count;

            # Insert
            $this->db->query('INSERT INTO courses (uid, start_date, end_date, cost, days) VALUES (:uid, :start_date, :end_date, :cost, :days)');
            $this->db->bind(':uid', $_SESSION['uid']);
            $this->db->bind(':start_date', $start_date);
            $this->db->bind(':end_date', $end_date);
            $this->db->bind(':cost', $this->cost);
            $this->db->bind(':days', $this->days);

            # Set object vars
            $this->start_date = $start_date;
            $this->end_date = $end_date;

            return $this->db->execute();
        }

        public function getCoursesByUser($uid) {
            $this->db->query('SELECT * FROM courses WHERE uid = :uid');
            $this->db->bind(':uid', $uid);
            return $this->db->resultSet();
        }
    }