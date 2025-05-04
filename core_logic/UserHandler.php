<?php
namespace core_logic;

use Exception;
use mysqli;

require_once __DIR__ . '/DBConnect.php';

class UserHandler {
    private mysqli $conn;

    public function __construct() {
        $this->conn = DBConnect::connect();
    }

    public function login(string $email, string $password): bool {
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($user = $result->fetch_assoc()) {
            if (password_verify($password, $user['password'])) {
                $_SESSION['user'] = $user;
                return true;
            }
        }

        throw new Exception("Nesprávny email alebo heslo.");
    }

}
