<?php
    class User {
        private $db;
        private $name;
        private $email;
        private $password;

        public function __construct() {
            $this->db = new Database;
        }

        # Create a user
        public function create($name, $email, $password) {
            # If email has already been used return false
            if($this->findByUserEmail($email))
                return false;

            # Insert into DB
            $this->db->query('INSERT INTO users (name, email, password) VALUES (:name, :email, :password)');
            $this->db->bind(':name', $name);
            $this->db->bind(':email', $email);
            $this->db->bind(':password', $password);

            # Set object vars
            $this->name = $name;
            $this->email = $email;
            $this->password = $password;

            return $this->db->execute();
        }

        public function get() {}

        # Find an user by email
        public function findByUserEmail($email) {
            $this->db->query('SELECT * FROM users WHERE email = :email');
            $this->db->bind(':email', $email);
            $this->db->execute();

            // Check if row exists
            return $this->db->rowCount() > 0;
        }

        # Login using email and password
        public function login($email, $password) {
            $this->db->query('SELECT * FROM users WHERE email = :email');
            $this->db->bind(':email', $email);
            $row = $this->db->single();
            $uid = $row->id;
            $name = $row->name;
            $hashed_password = $row->password;

            $_SESSION['uid'] = $uid;
            $_SESSION['name'] = $name;
            $_SESSION['email'] = $email;

            return password_verify($password, $hashed_password);
        }

    }