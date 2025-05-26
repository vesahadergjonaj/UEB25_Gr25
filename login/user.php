<?php
require_once("DataBase/db.php");
class User {
    private $username;
    private $email;
    private $password;

    // Constructor
    public function __construct($username, $email, $password) {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }
    public static function getUserByUsername($username) {
        global $conn;

        $sql = "SELECT * FROM users WHERE username = ?";
        $stmt = $conn->prepare($sql);
        if (!$stmt) return null;

        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_assoc();

        if ($data) {
            return new User($data['username'], $data['email'], $data['password']);
        }
        return null;
    }

    public static function getUserByEmail($email) {
        global $conn;

        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $conn->prepare($sql);
        if (!$stmt) return null;

        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_assoc();

        if ($data) {
            return new User($data['username'], $data['email'], $data['password']);
        }
        return null;
    }


    public static function insertUser(User $user) {
        global $conn; // kjo duhet të jetë mysqli connection

        $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);

        if (!$stmt) {
            echo "Gabim në prepare: " . $conn->error;
            return false;
        }

        $stmt->bind_param("sss", $user->username, $user->email, $user->password);

        if ($stmt->execute()) {
            return true;
        } else {
            echo "Gabim gjatë ekzekutimit: " . $stmt->error;
            return false;
        }
    }
    public static function existsByEmail($email) {
        global $conn;

        $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->num_rows > 0;
    }

    // Getters
    public function getUsername() {
        return $this->username;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    // Setters
    public function setUsername($username) {
        $this->username = $username;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    // Display user info (optional)
//    public function displayUser() {
//        echo "Username: " . $this->username . "<br>";
//        echo "Email: " . $this->email . "<br>";
//        echo "Password: " . $this->password . "<br>";
//    }
}

?>
