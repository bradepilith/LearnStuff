<?php
    class Book {
        private $db;
        private $amount;
        private $cost;

        public function __construct() {
            $this->db = new Database;
        }

        public function create($amount) {
            $book_cost = 4.99;

            $total_cost = $book_cost * $amount;

            # Insert
            $this->db->query('INSERT INTO books (uid, amount, cost) VALUES (:uid, :amount, :cost)');
            $this->db->bind(':uid', $_SESSION['uid']);
            $this->db->bind(':amount', $amount);
            $this->db->bind(':cost', $total_cost);

            # Set object vars
            $this->cost = $total_cost;
            $this->amount = $amount;

            return $this->db->execute();
        }

        public function getBooksByUser($uid) {
            $this->db->query('SELECT * FROM books WHERE uid = :uid');
            $this->db->bind(':uid', $uid);
            return $this->db->resultSet();
        }
    }