<?php
require_once 'dbconnection.php';

class Order {
    private $db;

    public function __construct(Database $db) {
        $this->db = $db;
    }

    public function addOrder($first_name, $last_name, $address, $apt_suite, $city, $state, $postal_code, $phone_number, $email, $card_number, $expiration_date, $cvv, $order_date) {
        $conn = $this->db->connect();

        $stmt = $conn->prepare("INSERT INTO orders (first_name, last_name, address, apt_suite, city, state, postal_code, phone_number, email, card_number, expiration_date, cvv, order_date) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssssssssss", $first_name, $last_name, $address, $apt_suite, $city, $state, $postal_code, $phone_number, $email, $card_number, $expiration_date, $cvv, $order_date);
        $result = $stmt->execute();

        $stmt->close();
        // $this->db->close();

        return $result;
    }
}
?>