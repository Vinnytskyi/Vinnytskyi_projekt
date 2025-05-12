<?php
class Users {
    public static function register($fullname, $email, $password) {

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $conn = DBConnect::connect();

        $stmt = $conn->prepare("INSERT INTO users (fullname, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $fullname, $email, $hashed_password);
        $stmt->execute();
    }

    public static function update($id, $fullname, $email, $password) {
        $conn = DBConnect::connect();

        if (!empty($password)) {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $conn->prepare("UPDATE users SET fullname = ?, email = ?, password = ? WHERE id = ?");
            $stmt->bind_param("sssi", $fullname, $email, $hashed_password, $id);
        } else {
            $stmt = $conn->prepare("UPDATE users SET fullname = ?, email = ? WHERE id = ?");
            $stmt->bind_param("ssi", $fullname, $email, $id);
        }
        $stmt->execute();
    }
}
?>
