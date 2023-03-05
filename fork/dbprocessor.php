 <?php
require_once 'dbconnection.php';
require_once 'order.php';
// Start the session
session_start();

// Create a new database connection
$db = new Database("localhost:4000", "root", "", "forkdb");

// Get the order data from the session
$orderData = array(
    'first_name' => $_SESSION['namef'],
    'last_name' => $_SESSION['lastnamef'],
    'address' => $_SESSION['Aptf'],
    'apt_suite' => $_SESSION['addressf'],
    'city' => $_SESSION['cityf'],
    'state' => $_SESSION['statef'],
    'postal_code' => $_SESSION['zipf'],
    'phone_number' => $_SESSION['phoneNumf'],
    'email' => $_SESSION['emailf'],
    'card_number' => $_SESSION['cardnumber'],
    'expiration_date' => $_SESSION['expirationdate'],
    'cvv' =>  $_SESSION['securitycode'],
    'order_date' => date('Y-m-d H:i:s')
);
// Create a new Order instance
// Insert a new order
$order = new Order($db);
$result = $order->addOrder(
    $orderData['first_name'],
    $orderData['last_name'],
    $orderData['address'],
    $orderData['apt_suite'],
    $orderData['city'],
    $orderData['state'],
    $orderData['postal_code'],
    $orderData['phone_number'],
    $orderData['email'],
    $orderData['card_number'],
    $orderData['expiration_date'],
    $orderData['cvv'],
    $orderData['order_date']
);


if ($result) {
    header("Location: thankYou.php");
    die();
} else {
    echo "Error inserting order.";
}
session_destroy();
$db->close();
?> 